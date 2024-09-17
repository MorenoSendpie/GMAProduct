<?php
include 'header_landing.php';
include 'koneksi.php';

// Fetch data from the landing table
$sql = "SELECT * FROM landing LIMIT 1";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $titlesection1 = $row['titlesection1'];
    $descsection1 = $row['descsection1'];
    $videosection1 = $row['videosection1'];
    $titlesection2 = $row['titlesection2'];
    $imagesection2 = $row['imagesection2'];
    $ourproductstitle = $row['ourproductstitle'];
    $imagesection3 = $row['imagesection3'];
    $titlesection4 = $row['titlesection4'];
    $descsection4 = $row['descsection4'];
    $titlecarousel4 = $row['titlecarousel4'];
    $desccarousel4 = $row['desccarousel4'];
    $imagesection4 = $row['imagesection4'];
    $imagedescsection4 = $row['imagedescsection4'];
    $titlesection5 = $row['titlesection5'];
    $descsection5 = $row['descsection5'];
    $titlesection6 = $row['titlesection6'];
    $imagesection6 = $row['imagesection6'];
    $buttontextsection6 = $row['buttontextsection6'];
    $whychooseustitle = $row['whychooseustitle'];
    $whychooseusdesc = $row['whychooseusdesc'];
    $whychooseusbuttontext = $row['whychooseusbuttontext'];
} else {
    echo "No data found.";
    exit;
}

// Fetch data from the kategori table
$sql = "SELECT * FROM kategori";
$kategori_result = $koneksi->query($sql);

if ($kategori_result->num_rows > 0) {
    $kategori_data = [];
    while ($row = $kategori_result->fetch_assoc()) {
        $kategori_data[] = $row;
    }
} else {
    echo "No categories found.";
    exit;
}

// Fetch data from the indexbox table
$sql = "SELECT * FROM indexbox";
$indexbox_result = $koneksi->query($sql);

if ($indexbox_result->num_rows > 0) {
    $indexbox_data = [];
    while ($row = $indexbox_result->fetch_assoc()) {
        $indexbox_data[] = $row;
    }
} else {
    echo "No index boxes found.";
    exit;
}

// Fetch data from the carouselindex table
$sql = "SELECT fotocarouselindex FROM carouselindex";
$carousel_result = $koneksi->query($sql);

if ($carousel_result->num_rows > 0) {
    $carousel_images = [];
    while ($row = $carousel_result->fetch_assoc()) {
        $carousel_images[] = $row['fotocarouselindex'];
    }
} else {
    echo "No carousel images found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $titlesection1; ?></title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
        }

        :root {
            --gma-yellow: #F7E835;
            --neutral: #F2EEE3;
            --light-yellow: #FFFEE5;
            --background: #10100E;
            --p-font: 12px;
        }

        @font-face {
            font-family: 'HighriseDemoBold';
            src: url('fonts/HighriseDemoBold700.otf') format('opentype');
        }

        @font-face {
            font-family: 'GeneralSans';
            src: url('fonts/GeneralSans-Regular.otf') format('opentype');
        }

        .logo {
            height: 50px;
        }

        body {
            font-family: 'HighriseDemoBold', sans-serif;
            display: flex;
            flex-direction: column;
            background-size: cover;
            color: #FFFFFF;
        }

        .first-section {
            position: relative;
            height: 800px;
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .first-section::before,
        .first-section::after {
            display: none;
        }

        .first-section-content {
            position: relative;
            z-index: 2;
            color: #FFFFFF;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .hero h1 {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 10rem;
            margin-bottom: 20px;
            line-height: 0.9;
        }

        .hero p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 1rem;
            max-width: 500px;
            margin: 0 auto;
        }

        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 8rem;
            }

            .hero p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 6rem;
            }

            .hero p {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 4rem;
            }

            .hero p {
                font-size: 0.7rem;
            }
        }

        .hero2 {
            text-align: center;
            padding-top: 100px;
            background: transparent;
        }

        .second-section {
            position: relative;
            height: 700px;
            padding-top: 10px;
            background-color: #10100E;
        }

        .news {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 5rem;
            line-height: 0.9;
            text-align: center;
            margin-top: -80px;
            position: static;
            background: transparent;
        }

        .media-item {
            position: relative;
            height: 550px;
            margin-left: 60px;
            margin-right: 60px;
            border-radius: 15px;
            background: url('foto_landing/<?php echo $imagesection2; ?>') no-repeat center center;
        }

        @media (max-width: 768px) {
            .media-item {
                margin-left: 20px;
                margin-right: 20px;
            }
        }

        @media (max-width: 480px) {
            .media-item {
                margin-left: 10px;
                margin-right: 10px;
            }
        }

        .products-section {
            font-family: 'GeneralSans', sans-serif;
            text-align: center;
            padding: 20px 20px;
            background-color: #10100E;
        }

        .products-title {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 5rem;
            margin-bottom: 20px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        @media (min-width: 600px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 900px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .product-item {
            text-align: center;
        }

        .product-item img {
            width: 100%;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .product-item img:hover {
            transform: scale(1.05);
        }

        .product-item p {
            margin-top: 10px;
            font-size: 1rem;
        }

        .third-section {
            background: url('foto_landing/<?php echo $imagesection3; ?>') no-repeat center center;
            background-size: contain;
            position: relative;
            width: 100%;
            height: 120vh;
            background-color: #10100E;
            padding-bottom: 20px;
        }

        @media (max-width: 768px) {
            .third-section {
                background-size: cover;
                height: 60vh;
            }
        }

        @media (max-width: 480px) {
            .third-section {
                background-size: cover;
                height: 40vh;
            }
        }

        .fourth-section {
            display: flex;
            flex-direction: column;
            padding: 70px 50px;
            background-color: #f2eee3;
        }

        .intro-text {
            flex: 1;
            padding-right: 20px;
            font-family: 'GeneralSans', sans-serif;
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding-bottom: 20px;
            padding-top: 30px;
        }

        .intro-text h2 {
            font-size: 10px;
            margin-bottom: 20px;
            color: #10100E;
        }

        .intro-text h2 span {
            display: inline-block;
            position: relative;
        }

        .intro-text h2 span::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-color: #10100E;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        .intro-text p {
            text-indent: 5em;
            text-align: justify;
            font-size: 25px;
            line-height: 1.5;
            margin-top: -10px;
            margin-left: 80px;
            color: #10100E;
        }

        .image-gallery {
            flex: 2;
            display: flex;
            gap: 20px;
        }

        .image-container {
            position: relative;
            width: 100%;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .image-container:first-child {
            flex: 2;
        }

        .image-container:last-child {
            margin-top: 30px;
            flex: 1;
        }

        @media (max-width: 768px) {
            .image-gallery {
                flex-direction: column;
            }

            .image-container:first-child, .image-container:last-child {
                flex: 1;
                margin-top: 0;
            }
        }

        .overlay {
            position: absolute;
            color: #fff;
            background-color: transparent;
            padding-left: 30px;
            padding-bottom: 20px;
            border-radius: 5px;
            align-content: end;
        }

        .overlay p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 12px;
            margin-bottom: 5px;
            color: white;
        }

        .overlay h3 {
            margin: 0 0 10px 0;
            font-size: 70px;
        }

        .overlay button {
            background-color: transparent;
            border: 1px solid #ffffff7c;
            color: #fff;
            padding: 5px 35px;
            cursor: pointer;
            border-radius: 3px;
            font-family: 'GeneralSans', sans-serif;
            font-weight: normal;
            font-size: 12px;
        }

        .overlay button:hover,
        .overlay2 button:hover {
            background-color: #fff;
            color: #10100E;
        }

        .overlay2 {
            position: absolute;
            background-color: transparent;
            padding: 0px 0px;
            border-radius: 5px;
        }

        .overlay2 p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 12px;
            color: black;
            line-height: 1.5;
        }

        .overlay2 button {
            font-family: 'GeneralSans', sans-serif;
            font-weight: normal;
            font-size: 12px;
            margin-top: 4rem;
            background-color: transparent;
            border: 1px solid #10100E;
            color: #10100E;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        .carousel-nav {
            position: absolute;
            right: 30px;
            bottom: 10px;
            display: flex;
            justify-content: space-between;
            transform: translateY(-90%);
            gap: 50px;
        }

        .carousel-nav button {
            background-color: rgb(255, 255, 255);
            border: none;
            color: #10100ec0;
            font-size: 18px;
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: width 0.3s, height 0.3s;
        }

        @media (max-width: 768px) {
            .carousel-nav button {
                width: 25px;
                height: 25px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .carousel-nav button {
                width: 20px;
                height: 20px;
                font-size: 14px;
            }
        }

        .learn-more {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: #fff;
            border: 1px solid #10100E;
            color: #10100E;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-family: 'GeneralSans', sans-serif;
            font-weight: normal;
        }

        .learn-more:hover {
            background-color: #10100E;
            color: #fff;
        }

        .fifth-section {
            background-color: #10100E;
            padding: 50px;
            text-align: center;
            padding-bottom: 200px;
        }

        .highlight-text {
            max-width: 650px;
            margin: 0 auto;
        }

        .highlight-text h1 {
            font-size: 80px;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1;
        }

        .highlight-yellow {
            color: #f7e835;
        }

        .highlight-text p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 8px;
            color: #ccc;
            max-width: 300px;
            margin: 20px auto 0;
            line-height: 1.7;
        }

        .sixth-section {
            position: relative;
            background: url('foto_landing/<?php echo $imagesection6; ?>') no-repeat center center;
            background-size: cover;
            height: 120vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.13);
        }

        .complete-look-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            max-width: 450px;
        }

        .complete-look-text h1 {
            font-size: 150px;
            margin: 0 0 20px;
            line-height: 0.9;
        }

        .complete-look-text button {
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            font-size: 10px;
            padding: 10px 30px;
            cursor: pointer;
            border-radius: 1px;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'GeneralSans', sans-serif;
            font-weight: normal;
        }

        .complete-look-text button:hover {
            background-color: #fff;
            color: #10100E;
        }

        .why-choose-us {
            display: flex;
            padding: 50px;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            background: #10100E;
        }

        .content {
            flex: 1;
            max-width: 400px;
        }

        .content h1 {
            font-size: 80px;
            margin-bottom: 20px;
        }

        .content p {
            font-family: 'GeneralSans', sans-serif;
            max-width: 350px;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .content button {
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            font-size: 12px;
            padding: 8px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            font-family: 'GeneralSans', sans-serif;
            font-weight: normal;
        }

        .content button:hover {
            background-color: #fff;
            color: #10100E;
        }

        .features {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .feature-box {
            padding: 20px;
            border-radius: 3px;
            width: 30rem;
            height: auto;
            box-sizing: border-box;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .feature-box.gold {
            background-color: #FFD700;
            color: #10100E;
        }

        .feature-box.black {
            background-color: #10100E;
            border: 1px solid #FFFFFF;
            border-color: white;
        }

        .feature-box h2 {
            font-size: 40px;
            margin: 0 0 20px;
        }

        .feature-box h3 {
            font-size: 40px;
            margin: 0 0 10px;
        }

        .feature-box p {
            max-width: 100%;
            font-family: 'GeneralSans', sans-serif;
            font-size: 16px;
            margin: 0;
            line-height: 1.4;
        }

        .animate {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .logo {
                height: 30px;
            }

            .navlist {
                display: none;
                flex-direction: column;
                width: 100%;
                gap: 10px;
                background: #10100E;
                position: absolute;
                top: 60px;
                left: 0;
            }

            .navlist.active {
                display: flex;
            }

            .navlist a {
                margin: 10px 0;
            }

            .hamburger {
                display: block;
            }

            .logo {
                order: 1;
                margin: 0 auto;
            }

            .left-nav {
                display: block;
            }

            .feature-box {
                width: 100%;
                padding: 15px;
            }

            .feature-box h2 {
                font-size: 24px;
            }

            .feature-box h3 {
                font-size: 20px;
            }

            .feature-box p {
                font-size: 14px;
            }

            .products-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
                padding: 50px 20px;
            }

            .product-item {
                width: 100%;
                text-align: center;
            }

            .product-item img {
                width: 100%;
                height: auto;
                aspect-ratio: 1/1;
                object-fit: cover;
            }

            .product-item p {
                font-size: 14px;
                text-align: center;
            }

            .intro-text {
                flex-direction: column;
                text-align: center;
            }

            .intro-text h2 {
                order: -1;
                font-size: 2rem;
                margin-bottom: 10px;
            }

            .intro-text p {
                font-size: 1rem;
                margin: 0;
                text-indent: 0;
                margin-top: 20px;
            }

            .overlay p {
                font-size: 8px;
                margin-bottom: 5px;
            }

            .overlay h3 {
                font-size: 30px;
            }

            .overlay button {
                font-size: 8px;
                padding: 5px 20px;
            }

            .overlay2 p {
                font-size: 8px;
                line-height: 1.2;
            }

            .overlay2 button {
                font-size: 8px;
                padding: 5px 10px;
                margin-top: 2rem;
            }

            .complete-look-text h1 {
                font-size: 50px;
                margin: 0 0 10px;
            }

            .complete-look-text button {
                font-size: 8px;
                padding: 5px 15px;
            }

            .why-choose-us {
                flex-direction: column;
                align-items: center;
            }

            .content {
                max-width: 100%;
                text-align: center;
                margin-bottom: 20px;
            }

            .features {
                width: 100%;
                align-items: center;
            }

            .feature-box {
                max-width: 100%;
                margin: 10px 0;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 80px;
            }

            .hero h2 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 16px;
            }

            .left-nav {
                order: 0;
                margin-bottom: 10px;
            }

            .left-nav a {
                font-size: 12px;
            }

            .right-nav {
                display: none;
            }

            .feature-box {
                padding: 10px;
            }

            .feature-box h2 {
                font-size: 20px;
            }

            .feature-box h3 {
                font-size: 18px;
            }

            .feature-box p {
                font-size: 12px;
            }

            .product-item img {
                width: 100%;
                height: auto;
                aspect-ratio: 1/1;
                object-fit: cover;
            }

            .product-item p {
                font-size: 12px;
                text-align: center;
            }

            .intro-text {
                flex-direction: column;
                text-align: center;
            }

            .intro-text h2 {
                order: -1;
                font-size: 2rem;
                margin-bottom: 10px;
            }

            .intro-text p {
                font-size: 1rem;
                margin: 0;
                text-indent: 0;
                margin-top: 20px;
            }

            .overlay p {
                font-size: 6px;
                margin-bottom: 3px;
            }

            .overlay h3 {
                font-size: 20px;
            }

            .overlay button {
                font-size: 6px;
                padding: 3px 10px;
            }

            .overlay2 p {
                font-size: 6px;
                line-height: 1;
            }

            .overlay2 button {
                font-size: 6px;
                padding: 3px 5px;
                margin-top: 1rem;
            }

            .complete-look-text h1 {
                font-size: 30px;
                margin: 0 0 5px;
            }

            .complete-look-text button {
                font-size: 6px;
                padding: 3px 10px;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

            // Carousel navigation
            const carouselImage = document.getElementById('carousel-image');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            const images = <?php echo json_encode(array_map(fn($image) => "foto_carousel/{$image}", $carousel_images)); ?>;
            let currentIndex = 0;

            function showImage(index) {
                carouselImage.src = images[index];
            }

            prevBtn.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage(currentIndex);
            });

            nextBtn.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % images.length;
                showImage(currentIndex);
            });

            // Redirect to product page with selected category
            const productItems = document.querySelectorAll('.product-item');
            productItems.forEach(item => {
                item.addEventListener('click', function() {
                    const categoryId = this.getAttribute('data-category-id');
                    window.location.href = `product.php?category=${categoryId}`;
                });
            });
        });
    </script>
</head>
<body>
    <section class="first-section">
        <video autoplay muted loop class="video-bg animate">
            <source src="video_landing/<?php echo $videosection1; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="first-section-content">
            <div class="hero">
                <h1 class="animate"><?php echo $titlesection1; ?></h1>
                <p class="animate"><?php echo $descsection1; ?></p>
            </div>
        </div>
    </section>
    <!-- Rest of your sections -->
    <section class="second-section">
        <div class="hero2">
            <h2 class="news animate"><?php echo $titlesection2; ?></h2>
        </div>
        <div class="media-item animate" style="background-image: url('foto_landing/<?php echo $imagesection2; ?>');"></div>
    </section>
    <section class="products-section">
        <h2 class="products-title animate"><?php echo $ourproductstitle; ?></h2>
        <div class="products-grid">
            <?php foreach ($kategori_data as $kategori): ?>
                <div class="product-item animate" data-category-id="<?php echo $kategori['idkategori']; ?>">
                    <img src="foto_kategori/<?php echo $kategori['fotokategori']; ?>" alt="<?php echo $kategori['namakategori']; ?>">
                    <p class="animate"><?php echo $kategori['namakategori']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="third-section animate" style="background-image: url('foto_landing/<?php echo $imagesection3; ?>');"></section>
    <section class="fourth-section">
        <div class="intro-text">
            <h2 class="animate"><?php echo $titlesection4; ?><br><span>introduction</span></h2>
            <p class="animate"><?php echo $descsection4; ?></p>
        </div>
        <div class="image-gallery">
            <div class="image-container">
                <img id="carousel-image" src="foto_carousel/<?php echo $carousel_images[0]; ?>" alt="Product 1" class="animate">
                <div class="overlay">
                    <p class="animate"><?php echo $desccarousel4; ?></p>
                    <h3 class="animate"><?php echo $titlecarousel4; ?></h3>
                    <button class="animate">Look closer!</button>
                </div>
                <div class="carousel-nav">
                    <button id="prev-btn" class="prev">&lt;</button>
                    <button id="next-btn" class="next">&gt;</button>
                </div>
            </div>
            <div class="image-container">
                <img src="foto_landing/<?php echo $imagesection4; ?>" alt="Product 2" class="animate">
                <div class="overlay2">
                    <p class="animate"><?php echo $imagedescsection4; ?></p>
                    <button class="animate">Learn more about us</button>
                </div>
            </div>
        </div>
    </section>
    <section class="fifth-section">
        <div class="highlight-text">
            <h1 class="animate"><?php echo $titlesection5; ?></h1>
            <p class="animate"><?php echo $descsection5; ?></p>
        </div>
    </section>
    <section class="sixth-section" style="background-image: url('foto_landing/<?php echo $imagesection6; ?>');">
        <div class="overlay"></div>
        <div class="complete-look-text">
            <h1 class="animate"><?php echo $titlesection6; ?></h1>
            <button class="animate"><?php echo $buttontextsection6; ?></button>
        </div>
    </section>
    <section class="why-choose-us">
        <div class="content">
            <h1 class="animate"><?php echo $whychooseustitle; ?></h1>
            <p class="animate"><?php echo $whychooseusdesc; ?></p>
            <button class="animate"><?php echo $whychooseusbuttontext; ?></button>
        </div>
        <div class="features">
            <?php foreach ($indexbox_data as $index): ?>
                <div class="feature-box <?php echo ($index['idindexbox'] == 1) ? 'gold' : 'black'; ?>">
                    <h2 class="animate"><?php echo str_pad($index['idindexbox'], 2, '0', STR_PAD_LEFT); ?></h2>
                    <h3 class="animate"><?php echo $index['titleindexbox']; ?></h3>
                    <p class="animate"><?php echo $index['descindexbox']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

            const carouselImage = document.getElementById('carousel-image');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            const images = <?php echo json_encode(array_map(fn($image) => "foto_carousel/{$image}", $carousel_images)); ?>;
            let currentIndex = 0;

            function showImage(index) {
                carouselImage.src = images[index];
            }

            prevBtn.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage(currentIndex);
            });

            nextBtn.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % images.length;
                showImage(currentIndex);
            });

            const productItems = document.querySelectorAll('.product-item');
            productItems.forEach(item => {
                item.addEventListener('click', function() {
                    const categoryId = this.getAttribute('data-category-id');
                    window.location.href = `product.php?category=${categoryId}`;
                });
            });
        });
    </script>
</body>
</html>

<?php
include 'footer.php';
?>
