<?php
session_start();
include 'koneksi.php';
include 'header.php';

// Fetch keyword from POST request
$keyword = isset($_POST['keyword']) ? $koneksi->real_escape_string($_POST['keyword']) : "";

// Fetch categories
$ambilkategori = $koneksi->query("SELECT * FROM kategori ORDER BY namakategori ASC");
if ($ambilkategori) {
    $categories = $ambilkategori->fetch_all(MYSQLI_ASSOC);
} else {
    $categories = [];
}

// Determine active category
$activeCategoryId = isset($_GET['category']) ? intval($_GET['category']) : (count($categories) > 0 ? $categories[0]['idkategori'] : 0);

// Get active category name
$activeCategoryName = "";
if (!empty($categories)) {
    foreach ($categories as $category) {
        if ($category['idkategori'] == $activeCategoryId) {
            $activeCategoryName = htmlspecialchars($category['namakategori']);
            break;
        }
    }
}

// Fetch brands associated with the active category
$ambilbrand = $koneksi->query("SELECT * FROM brand ORDER BY namabrand ASC");
if ($ambilbrand) {
    $brands = $ambilbrand->fetch_all(MYSQLI_ASSOC);
} else {
    $brands = [];
}

// Determine active brand
$activeBrandId = isset($_GET['brand']) ? intval($_GET['brand']) : null;
$activeBrandName = "";
if ($activeBrandId) {
    foreach ($brands as $brand) {
        if ($brand['idbrand'] == $activeBrandId) {
            $activeBrandName = htmlspecialchars($brand['namabrand']);
            break;
        }
    }
}

// Fetch motorcycles associated with the active brand
$ambilmotor = $koneksi->query("SELECT * FROM motor ORDER BY namamotor ASC");
if ($ambilmotor) {
    $motors = $ambilmotor->fetch_all(MYSQLI_ASSOC);
} else {
    $motors = [];
}

// Determine active motorcycle
$activeMotorId = isset($_GET['motor']) ? intval($_GET['motor']) : null;
$activeMotorName = "";
if ($activeMotorId) {
    foreach ($motors as $motor) {
        if ($motor['idmotor'] == $activeMotorId) {
            $activeMotorName = htmlspecialchars($motor['namamotor']);
            break;
        }
    }
}

// Determine sorting option
$sortOption = isset($_GET['sort']) ? $_GET['sort'] : 'abc_asc';

// Prepare sort query part
switch ($sortOption) {
    case 'abc_asc':
        $sortQueryPart = 'namaproduk ASC';
        break;
    case 'abc_desc':
        $sortQueryPart = 'namaproduk DESC';
        break;
    case 'harga_asc':
        $sortQueryPart = 'CAST(hargaproduk AS UNSIGNED) ASC';
        break;
    case 'harga_desc':
        $sortQueryPart = 'CAST(hargaproduk AS UNSIGNED) DESC';
        break;
    default:
        $sortQueryPart = 'namaproduk ASC';
}

// Fetch products for the active category, brand, and motorcycle
if ($keyword) {
    // Search by keyword regardless of category, brand, or motor
    $query = "SELECT * FROM produk WHERE namaproduk LIKE ? OR hargaproduk LIKE ? ORDER BY $sortQueryPart";
    $stmt = $koneksi->prepare($query);
    $likeKeyword = "%$keyword%";
    $stmt->bind_param("ss", $likeKeyword, $likeKeyword);
} else {
    // Filter by category, brand, and motor
    $query = "SELECT * FROM produk WHERE idkategori = ?";
    if ($activeBrandId) {
        $query .= " AND idbrand = ?";
    }
    if ($activeMotorId) {
        $query .= " AND idmotor = ?";
    }
    $query .= " ORDER BY $sortQueryPart";
    $stmt = $koneksi->prepare($query);

    if ($activeBrandId && $activeMotorId) {
        $stmt->bind_param("iii", $activeCategoryId, $activeBrandId, $activeMotorId);
    } elseif ($activeBrandId) {
        $stmt->bind_param("ii", $activeCategoryId, $activeBrandId);
    } else {
        $stmt->bind_param("i", $activeCategoryId);
    }
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @font-face {
            font-family: 'HighriseDemo';
            src: url('fonts/HighriseDemoBold700.otf') format('opentype');
        }

        @font-face {
            font-family: 'GeneralSans-Semibold';
            src: url('fonts/GeneralSans-Semibold.otf') format('opentype');
        }

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }

        .container-fluid.custom-container {
            padding: 0 60px;
            margin-top: -0px;
            margin-bottom: 0;
        }

        .cat_product_area {
            background-color: #10100E;
            color: #F2EEE3;
            margin-bottom: 0;
        }

        .category-title {
            font-family: 'HighriseDemo';
            color: #FFFEE5;
            font-size: 90px;
            font-stretch: normal;
            text-align: left;
            text-transform: uppercase;
            position: relative;
            align-self: flex-start;
            margin-bottom: 0;
        }

        .category-header {
            position: relative;
            margin-bottom: 20px;
            padding: 20px 0;
            background-color: #10100E;
            color: #FFFEE5;
        }

        .category-header.no-margin {
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .single-product {
            background-color: transparent;
        }

        .single-product .product-card-img {
            border: 1px solid #ccc;
            border-radius: 0px;
            overflow: hidden;
            position: relative;
        }

        .single-product .product-card-img .fade-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: opacity 0.5s ease;
            opacity: 0;
        }

        .single-product .product-card-img:hover .fade-img {
            opacity: 1;
        }

        .square-container {
            width: 100%;
            position: relative;
            padding-bottom: 100%;
        }

        .square-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-control {
            border-radius: 0;
            background-color: transparent;
            color: #FFFEE5;
        }

        .form-control::placeholder {
            color: #FFFEE5;
        }

        .input-group {
            position: relative;
        }

        .input-group-append {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
        }

        .input-group-append .btn {
            border-radius: 0;
        }

        .btn.btn-info {
            background-color: transparent;
        }

        .single-product .product-btm {
            background-color: transparent;
            border: none;
            padding: 10px 0;
        }

        .single-product .product-btm h4 {
            color: #FFFEE5;
            font-weight: bold;
        }

        .single-product .product-btm .availability-box {
            color: #A9A9A9 !important;
        }

        .category-item, .brand-item, .motor-item {
            display: block;
            position: relative;
        }

        .brand-item {
            margin-left: 30px;
        }

        .motor-item {
            margin-left: 30px;
        }

        .category-box, .brand-box, .motor-box {
            width: 15px;
            height: 15px;
            border: .5px solid #FFFEE5;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
        }

        .category-box:hover, .brand-box:hover, .motor-box:hover {
            background-color: #FFFEE5;
            color: #10100E;
        }

        .category-box.active, .brand-box.active, .motor-box.active {
            background-color: #FFFEE5;
            color: #10100E;
        }

        .category-name, .brand-name, .motor-name {
            margin-left: 10px;
            color: #FFFEE5;
            display: inline-block;
            vertical-align: middle;
        }

        .additional-text {
            font-family: 'General Sans', 'Arial', sans-serif;
            font-stretch: normal;
            font-size: 15px;
            color: #F2EEE3;
            text-align: left;
            margin-bottom: 20px;
        }

        .availability-box {
            font-size: 8px !important;
            display: inline-block;
            border: 1px solid #A9A9A9 !important;
            padding: 3px 6px;
            color: #A9A9A9 !important;
            background-color: transparent;
            margin-top: 5px;
            text-transform: uppercase;
        }

        .filter-text {
            font-family: 'YourFontName', sans-serif;
            color: #FFFEE5;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .active-category-name {
            font-family: 'YourFontName', sans-serif;
            color: #FFFEE5;
            font-size: 16px;
            margin-top: 10px;
            text-transform: uppercase;
        }

        hr {
            border-top: 1px solid #FFFEE5;
        }

        .sort-dropdown {
            display: flex;
            align-items: center;
        }

        .sort-dropdown .form-control {
            border-radius: 0;
            background-color: transparent;
            color: #FFFEE5;
            border: 1px solid #FFFEE5;
            width: auto;
            padding-right: 25px;
        }

        .sort-dropdown .form-control:focus {
            background-color: transparent;
            box-shadow: none;
            color: #FFFEE5;
        }

        .sort-dropdown .form-control option {
            background-color: #10100E;
            color: #FFFEE5;
        }

        .sort-dropdown .form-control::-ms-expand {
            display: none;
        }

        .sort-dropdown .form-control:after {
            content: '\f107';
            font-family: 'FontAwesome';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        @media (max-width: 768px) {
            .category-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .sort-dropdown {
                width: 100%;
                margin-top: 10px;
            }

            .sort-dropdown .form-control {
                width: 100%;
            }
        }

        .moving-word-container {
            background-color: yellow;
            font-family: 'GeneralSans-Semibold', sans-serif;
            text-align: center;
            padding: 10px 0;
            white-space: nowrap;
            overflow: hidden;
        }

        .moving-word {
            display: inline-block;
            animation: moveRight 20s linear infinite;
        }

        .moving-word-item {
            color: #000;
            font-size: 20px;
            display: inline-block;
        }

        @keyframes moveRight {
            0% {
                transform: translateX(-40%);
            }
            100% {
                transform: translateX(0%);
            }
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #000;
            border-radius: 50%;
            margin: 0 10px;
            display: inline-block;
        }

        .category-header + .container-fluid {
            margin-top: 0;
            padding-top: 0;
            background-color: #10100E;
        }

        .accessory-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .accessory-img-container {
            position: relative;
        }

        .accessory-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .accessory-title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: #FFF;
            text-align: center;
            font-size: 1.2em;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .accessory-item:hover .accessory-img {
            transform: scale(1.1);
        }

        .accessory-item:hover .accessory-title {
            opacity: 1;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .accessories-row::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .accessories-row {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .accessories-row {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 0;
        }

        .accessory-item-container {
            flex: 0 0 auto;
            width: 25%;
            margin-right: 20px; /* Add margin between items */
        }

        .scroll-btn {
            background-color: rgba(0, 0, 0, 0.5);
            color: #FFF;
            border: none;
            padding: 10px;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .scroll-btn.left {
            left: 0;
        }

        .scroll-btn.right {
            right: 0;
        }

        @media (max-width: 768px) {
            .category-header {
                text-align: center;
            }

            .accessory-item-container {
                width: 50%;
            }

            .accessory-title {
                position: static;
                background: transparent;
                color: #FFF;
                text-align: center;
                font-size: 1em;
                opacity: 1;
            }

            .accessory-item:hover .accessory-title {
                opacity: 1;
            }
        }

        @media (max-width: 480px) {
            .category-title {
                font-size: 48px;
            }

            .accessory-item-container {
                width: 50%;
            }

            .category-header {
                text-align: center;
            }

            .sort-dropdown {
                width: 100%;
                margin-top: 10px;
            }

            .sort-dropdown .form-control {
                width: 100%;
            }

            .accessory-img-container {
                padding-bottom: 50%;
            }
        }

        /* Animation CSS */
        .animate {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Ensuring minimum 2 products per row */
        .product-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product-item {
            flex: 0 0 calc(50% - 20px);
            margin: 10px;
        }

        @media (min-width: 768px) {
            .product-item {
                flex: 0 0 calc(33.333% - 20px);
            }
        }

        @media (min-width: 1024px) {
            .product-item {
                flex: 0 0 calc(25% - 20px);
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var accessoryItems = document.querySelectorAll(".accessory-item");
            accessoryItems.forEach(function (item) {
                item.addEventListener("click", function () {
                    var categoryId = item.getAttribute("data-category-id");
                    window.location.href = "?category=" + categoryId;
                });
            });

            // Animation observer
            const elements = document.querySelectorAll('.animate');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            elements.forEach(element => {
                observer.observe(element);
            });

            // Scroll buttons
            const scrollContainer = document.querySelector('.accessories-row');
            const scrollAmount = scrollContainer.offsetWidth;

            document.querySelector('.scroll-btn.left').addEventListener('click', () => {
                scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });

            document.querySelector('.scroll-btn.right').addEventListener('click', () => {
                scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });

            var categoryItems = document.querySelectorAll(".category-item");
            categoryItems.forEach(function (item) {
                item.addEventListener("click", function (e) {
                    if (!e.target.closest('.brand-box')) {
                        var categoryId = item.querySelector(".category-box").getAttribute("href").split("=")[1];
                        window.location.href = "?category=" + categoryId;
                    }
                });
            });

            var brandItems = document.querySelectorAll(".brand-item");
            brandItems.forEach(function (item) {
                item.addEventListener("click", function (e) {
                    e.stopPropagation();
                    var brandId = item.querySelector(".brand-box").getAttribute("href").split("=")[2];
                    window.location.href = "?category=" + <?= $activeCategoryId ?> + "&brand=" + brandId;
                });
            });

            var motorItems = document.querySelectorAll(".motor-item");
            motorItems.forEach(function (item) {
                item.addEventListener("click", function (e) {
                    e.stopPropagation();
                    var motorId = item.querySelector(".motor-box").getAttribute("href").split("=")[2];
                    window.location.href = "?category=" + <?= $activeCategoryId ?> + "&brand=" + <?= $activeBrandId ?> + "&motor=" + motorId;
                });
            });
        });
    </script>
</head>
<body>
    <section class="cat_product_area section_gap">
        <div class="container-fluid custom-container">
            <div class="category-header mb-5 animate">
                <h3 class="mb-2 additional-text">
                    Product / <?= $activeCategoryName ?><?= $activeBrandName ? ' / ' . $activeBrandName : '' ?><?= $activeMotorName ? ' / ' . $activeMotorName : '' ?>
                </h3>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-end">
                    <h2 class="category-title">
                        <?= $activeCategoryName ?>
                    </h2>
                    <div class="sort-dropdown">
                        <form method="get" id="sortForm">
                            <input type="hidden" name="category" value="<?= $activeCategoryId ?>">
                            <?php if ($activeBrandId): ?>
                                <input type="hidden" name="brand" value="<?= $activeBrandId ?>">
                            <?php endif; ?>
                            <?php if ($activeMotorId): ?>
                                <input type="hidden" name="motor" value="<?= $activeMotorId ?>">
                            <?php endif; ?>
                            <select name="sort" class="form-control" onchange="document.getElementById('sortForm').submit();">
                                <option value="abc_asc" <?= $sortOption == 'abc_asc' ? 'selected' : '' ?>>A-Z</option>
                                <option value="abc_desc" <?= $sortOption == 'abc_desc' ? 'selected' : '' ?>>Z-A</option>
                                <option value="harga_asc" <?= $sortOption == 'harga_asc' ? 'selected' : '' ?>>Termurah</option>
                                <option value="harga_desc" <?= $sortOption == 'harga_desc' ? 'selected' : '' ?>>Termahal</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="category-tabs mt-4">
                        <h4 class="filter-text animate">FILTER BY OPTION</h4>

                        <form method="post" class="mb-4 animate">
                            <div class="input-group">
                                <input type="text" name="keyword" value="<?= htmlspecialchars($keyword) ?>" placeholder="SEARCH" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" name="cari" value="cari" class="btn btn-info" style="background-color: transparent; border: none;"><i class="fas fa-search" style="color: #FFF;"></i></button>
                                </div>
                            </div>
                            <div class="active-category-name"><?= $activeCategoryName ?></div>
                            <hr style="margin-top: 10px; margin-bottom: 10px;">
                        </form>
                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <div class="category-item animate">
                                    <a href="?category=<?= $category['idkategori'] ?>" class="category-box <?= ($category['idkategori'] == $activeCategoryId) ? 'active' : '' ?>"></a>
                                    <span class="category-name"><?= htmlspecialchars($category['namakategori']) ?></span>
                                    <?php if ($category['idkategori'] == $activeCategoryId): ?>
                                        <div class="brand-list">
                                            <?php foreach ($brands as $brand): ?>
                                                <div class="brand-item">
                                                    <a href="?category=<?= $category['idkategori'] ?>&brand=<?= $brand['idbrand'] ?>" class="brand-box <?= ($brand['idbrand'] == $activeBrandId) ? 'active' : '' ?>"></a>
                                                    <span class="brand-name"><?= htmlspecialchars($brand['namabrand']) ?></span>
                                                    <?php if ($brand['idbrand'] == $activeBrandId): ?>
                                                        <div class="motor-list">
                                                            <?php foreach ($motors as $motor): ?>
                                                                <div class="motor-item">
                                                                    <a href="?category=<?= $category['idkategori'] ?>&brand=<?= $brand['idbrand'] ?>&motor=<?= $motor['idmotor'] ?>" class="motor-box <?= ($motor['idmotor'] == $activeMotorId) ? 'active' : '' ?>"></a>
                                                                    <span class="motor-name"><?= htmlspecialchars($motor['namamotor']) ?></span>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="latest_product_inner">
                        <?php if ($result && $result->num_rows > 0): ?>
                            <div class="product-row justify-content-center mb-5 animate" style="padding-bottom:10px">
                                <?php while ($produk = $result->fetch_assoc()): ?>
                                    <div class="product-item">
                                        <div class="single-product animate">
                                            <div class="product-card-img square-container">
                                                <img class="card-img square-img"
                                                    src="foto_produk/<?= htmlspecialchars($produk['fotoproduk']) ?>" alt=""
                                                    onmouseover="this.style.opacity='0'; this.style.transition='opacity 1s ease-in-out'; setTimeout(() => {this.src='foto_perubahan/<?= isset($produk['foto_perubahan']) ? htmlspecialchars($produk['foto_perubahan']) : htmlspecialchars($produk['fotoproduk']) ?>'; this.style.opacity='1'}, 500)"
                                                    onmouseout="this.style.opacity='1'; this.style.transition='opacity 1s ease-in-out'; setTimeout(() => {this.src='foto_produk/<?= htmlspecialchars($produk['fotoproduk']) ?>'}, 500)" />
                                                <img class="fade-img" src="foto_perubahan/<?= isset($produk['foto_perubahan']) ? htmlspecialchars($produk['foto_perubahan']) : htmlspecialchars($produk['fotoproduk']) ?>" alt="">
                                            </div>
                                            <div class="product-btm">
                                                <a href="detail.php?id=<?= htmlspecialchars($produk['idproduk']); ?>" class="d-block">
                                                    <h4><?= htmlspecialchars($produk['namaproduk']) ?></h4>
                                                </a>
                                                <div class="mt-3">
                                                    <span style="color: #FFFEE5;">Rp <?= number_format($produk['hargaproduk']) ?></span>
                                                    <br>
                                                    <?php if ($produk['kesediaanproduk'] == 'Tersedia'): ?>
                                                        <span class="availability-box" style="color: #FFFEE5;">Tersedia</span>
                                                    <?php else: ?>
                                                        <span class="availability-box"><?= htmlspecialchars($produk['kesediaanproduk']) ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php else: ?>
                            <p class="text-center mt-5 animate">Tidak ada produk yang ditemukan dalam kategori ini.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="moving-word-container">
            <div class="moving-word animate">
                <div class="moving-word-item">ELEVATE YOUR PAGE</div>
                <div class="dot"></div>
                <div class="moving-word-item">EVERY DETAIL MATTERS</div>
                <div class="dot"></div>
                <div class="moving-word-item">STANDOUT FROM THE BEST</div>
                <div class="dot"></div>
                <div class="moving-word-item">ONLY THE ACCESSORIES</div>
                <div class="dot"></div>
                <div class="moving-word-item">RIDE WITH PRIDE</div>
                <div class="dot"></div>
                <!-- Duplicate content for seamless loop -->
                <div class="moving-word-item">ELEVATE YOUR PAGE</div>
                <div class="dot"></div>
                <div class="moving-word-item">EVERY DETAIL MATTERS</div>
                <div class="dot"></div>
                <div class="moving-word-item">STANDOUT FROM THE BEST</div>
                <div class="dot"></div>
                <div class="moving-word-item">ONLY THE ACCESSORIES</div>
                <div class="dot"></div>
                <div class="moving-word-item">RIDE WITH PRIDE</div>
            </div>
        </div>

        <!-- New section for More Accessories -->
        <div class="container-fluid custom-container position-relative">
            <div class="category-header no-margin animate">
                <h2 class="category-title">More Accessories</h2>
            </div>
            <button class="scroll-btn left"><i class="fas fa-chevron-left"></i></button>
            <button class="scroll-btn right"><i class="fas fa-chevron-right"></i></button>
            <div class="accessories-row animate">
                <?php
                // Fetch categories for the More Accessories section
                $query = "SELECT * FROM kategori ORDER BY namakategori ASC";
                $result = $koneksi->query($query);

                if ($result && $result->num_rows > 0): ?>
                    <?php while ($category = $result->fetch_assoc()): ?>
                        <div class="accessory-item-container animate">
                            <div class="accessory-item" data-category-id="<?= $category['idkategori'] ?>">
                                <div class="accessory-img-container square-container">
                                    <img src="foto_kategori/<?= htmlspecialchars($category['fotokategori']) ?>" alt="<?= htmlspecialchars($category['namakategori']) ?>" class="accessory-img square-img">
                                    <div class="accessory-title"><?= htmlspecialchars($category['namakategori']) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-center mt-5 animate">Tidak ada aksesori yang ditemukan.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
