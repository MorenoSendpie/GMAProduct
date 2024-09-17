<?php
session_start();
include 'koneksi.php';

function rupiah($number) {
    return 'Rp ' . number_format($number, 0, ',', '.');
}

$idproduk = htmlspecialchars($_GET["id"]);
$ambil = $koneksi->query("SELECT * FROM produk WHERE idproduk='$idproduk'");
$detail = $ambil->fetch_assoc();
$kategori = htmlspecialchars($detail["idkategori"]);

// Fetch additional product images
$additionalImages = $koneksi->query("SELECT * FROM produk_images WHERE idproduk='$idproduk'");

include 'header.php';
?>

<style>
@font-face {
    font-family: 'GeneralSans-Semibold';
    src: url('fonts/GeneralSans-Semibold.otf') format('opentype');
}

.custom_banner_area {
    background-color: #10100E !important;
    padding: 20px 0;
}

.product_image_area {
    background-color: #10100E !important;
    margin-top: 30px;
}

.product_image_area img {
    border: 1px solid white;
    border-radius: 0;
    width: 100%;
}

.warranty-container img {
    border: 0px !important;
    border-radius: 0;
    width: 15px !important;
    height: 15px !important;
}

.product_image_area .s_product_text2 h3 {
    color: #FFFEE3;
    font-family: "GeneralSans-Semibold", sans-serif;
    text-transform: uppercase;
    font-size: 30px;
}

.product_image_area .s_product_text2 h2 {
    color: #FFFEE5 !important;
    font-family: "General Sans Regular", sans-serif;
    padding-bottom: 80px;
    font-size: 18px;
}

.product_image_area .s_product_text2 .stars {
    color: #FFD700;
    font-size: 20px;
}

.product_image_area .s_product_text2 .description-button-container {
    position: relative;
    width: 100%;
}

.product_image_area .s_product_text2 .description-button {
    background-color: transparent;
    border: none;
    color: white;
    padding: 5px;
    cursor: pointer;
    text-align: left;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0;
    font-size: 16px;
    outline: none;
}

.product_image_area .s_product_text2 .description-line {
    height: 1px;
    background-color: white;
    margin: 5px 0;
}

.description {
    display: block;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, opacity 0.5s ease;
    opacity: 0;
    color: #E0E0E0;
}

.description.show {
    max-height: 1000px;
    opacity: 1;
}

.square-image-container {
    width: 100%;
    padding-top: 100%;
    position: relative;
    overflow: hidden;
}

.square-image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 1px solid white;
}

.warranty-container {
    display: flex;
    align-items: center;
    margin-top: 10px;
    color: #FFFEE5;
    font-family: "General Sans Regular", sans-serif;
    font-size: 18px;
}

.warranty-container img {
    width: 24px;
    height: 24px;
    margin-right: 10px;
    object-fit: contain;
}

.card {
    background-color: transparent;
    border: none;
}

.card .card-body {
    background-color: transparent;
    border: none;
    padding: 10px;
    border-top: none;
    border-radius: 0 0 10px 10px;
    text-align: left;
    color: #FFFEE5;
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}

.carousel-item img {
    max-height: 500px;
    object-fit: cover;
    width: 100%;
}

.moving-word-container {
    background-color: yellow;
    font-family: 'GeneralSans-Semibold', sans-serif;
    text-align: center;
    padding: 10px 0;
    white-space: nowrap;
    overflow: hidden;
    margin-top: 30px;
    margin-bottom: 50px;
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

.things-you-may-like {
    background-color: #10100E !important;
}

.card {
    background-color: transparent;
    border: none;
}

.card .card-body {
    background-color: transparent;
    border: none;
    padding: 10px;
    border-top: none;
    border-radius: 0 0 10px 10px;
    text-align: left;
}

.scroll-button {
    background-color: #FFFEE5;
    border: none;
    color: #10100E;
    padding: 10px;
    font-size: 30px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 2;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.scroll-button.left {
    left: 10px;
}

.scroll-button.right {
    right: 10px;
}

#product-container {
    overflow-x: auto;
    white-space: nowrap;
    position: relative;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

#product-container::-webkit-scrollbar {
    display: none;
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
</style>

<div class="product_image_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Bootstrap Carousel for Product Images -->
                <div id="productCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Main Product Image -->
                        <div class="carousel-item active">
                            <img src="foto_produk/<?php echo htmlspecialchars($detail['fotoproduk']); ?>" alt="Main Product Image">
                        </div>
                        <!-- Additional Product Images -->
                        <?php while ($img = $additionalImages->fetch_assoc()) { ?>
                            <div class="carousel-item">
                                <img src="foto_produk_tambahan/<?php echo htmlspecialchars($img['fotoproduk']); ?>" alt="Additional Product Image">
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <div class="s_product_text2 mt-5 animate">
                    <div class="stars">★★★★★</div>
                    <div class="text-center mb-2"></div>
                    <h3><?php echo htmlspecialchars($detail["namaproduk"]); ?></h3>
                    <h2 class="text-success"><?php echo rupiah($detail["hargaproduk"]); ?></h2>
                    <div class="warranty-container">
                        <img src="foto/shield.png" alt="Shield Icon">
                        <span style="font-size: 8px">100% Warranty</span>
                    </div>
                    <div class="description-line"></div>
                    <button class="description-button" onclick="toggleDescription(this)">
                        <span>DESCRIPTION</span>
                        <span class="toggle-symbol">+</span>
                    </button>
                    <div class="description-line"></div>
                    <div class="description">
                        <?php echo htmlspecialchars($detail["deskripsiproduk"]); ?>
                    </div>
                    <button class="description-button" onclick="toggleDescription(this)">
                        <span>FEATURES</span>
                        <span class="toggle-symbol">+</span>
                    </button>
                    <div class="description-line"></div>
                    <div class="description">
                        <?php echo htmlspecialchars($detail["namaproduk"]); ?>
                    </div>
                    <button class="description-button" onclick="toggleDescription(this)">
                        <span>LOCAL RETAILERS</span>
                        <span class="toggle-symbol">+</span>
                    </button>
                    <div class="description-line"></div>
                    <div class="description">
                        
                    </div>
                    <button class="description-button" onclick="toggleDescription(this)">
                        <span>MANUAL</span>
                        <span class="toggle-symbol">+</span>
                    </button>
                    <div class="description-line"></div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Moving Animation Section -->
<section class="cat_product_area section_gap" style="margin-bottom: 0 !important; padding-bottom: 0 !important;">
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
</section>

<!-- Video Section -->
<?php if (!empty($detail['videoproduk'])): ?>
<section class="video-section" style="background-color: #10100E !important; padding: 20px 0;">
    <div class="container">
        <h2 class="text-center animate" style="color: #FFFEE5; font-family: 'GeneralSans-Semibold', sans-serif; font-size: 30px;">PRODUCT VIDEO</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <video width="100%" controls autoplay muted loop>
                    <source src="video_produk/<?php echo htmlspecialchars($detail['videoproduk']); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Things You May Like Section -->
<section class="things-you-may-like section_gap" style="">
    <div class="container-fluid">
        <h2 class="text-center animate" style="color: #FFFEE5; font-family: 'GeneralSans-Semibold', sans-serif; font-size: 30px; margin-bottom: 30px;">YOU MIGHT LIKE THIS TOO!</h2>
        <div class="row justify-content-center position-relative">
            <button class="scroll-button left animate" onclick="scrollHorizontally(document.getElementById('product-container'), 'left')">‹</button>
            <div class="col-12" id="product-container" style="overflow-x: auto; white-space: nowrap; position: relative; z-index: 1;">
                <?php
                $ambil = $koneksi->query("SELECT * FROM produk WHERE idkategori='$kategori'");
                while($produk = $ambil->fetch_assoc()) {
                ?>
                <div class="col-md-2 d-inline-block animate" style="float: none;">
                    <div class="card mb-4">
                        <div class="square-image-container">
                            <img src="foto_produk/<?php echo htmlspecialchars($produk["fotoproduk"]); ?>" alt="<?php echo htmlspecialchars($produk["namaproduk"]); ?>">
                        </div>
                        <div class="card-body text-left">
                            <h5 class="card-title" style="font-family: 'GeneralSans-Semibold', sans-serif;">
                                <a href="detail.php?id=<?php echo htmlspecialchars($produk["idproduk"]); ?>" style="color: #FFFEE5;"><?php echo htmlspecialchars($produk["namaproduk"]); ?></a>
                            </h5>
                            <p class="card-text"><?php echo rupiah($produk["hargaproduk"]); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <button class="scroll-button right animate" onclick="scrollHorizontally(document.getElementById('product-container'), 'right')">›</button>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>

<script>
function toggleDescription(button) {
    var description = button.nextElementSibling.nextElementSibling;
    var toggleSymbol = button.querySelector('.toggle-symbol');

    if (description.classList.contains('show')) {
        description.classList.remove('show');
        description.style.maxHeight = null;
        toggleSymbol.textContent = '+';
    } else {
        description.classList.add('show');
        description.style.maxHeight = description.scrollHeight + "px";
        toggleSymbol.textContent = '-';
    }
}

function scrollHorizontally(element, direction) {
    if (direction === 'left') {
        element.scrollBy({ left: -300, behavior: 'smooth' });
    } else {
        element.scrollBy({ left: 300, behavior: 'smooth' });
    }
}

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
});
</script>
