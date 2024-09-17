<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---remix-icon-->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <!---fonts-->
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">
    <!---css-->
    <link rel="stylesheet" href="style.css">
    <title>UPGRADE YOUR RIDE TODAY</title>
</head>

<body>
    <section class="first-section">
        <video autoplay muted loop class="video-bg">
            <source src="video_bg/Videobg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="first-section-content">
            <div class="hero">
                <h1>UPGRADE YOUR<br>RIDE TODAY!</h1>
                <p>Our products help you customize your ride to stand out on the road. Discover the difference quality makes and elevate your riding experience with GMA Product Series.</p>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="hero2">
            <h2 class="news">NEWS AND UPDATES</h2>
        </div>
        <div class="media-item"></div>
    </section>
    <section class="products-section">
        <h2 class="products-title">OUR PRODUCTS</h2>
        <div class="products-grid">
            <div class="product-item">
                <img src="assets/cbr.png" alt="Head Lights">
                <p>Head Lights</p>
            </div>
            <div class="product-item">
                <img src="assets/Fazio.png" alt="Rear Lights">
                <p>Rear Lights</p>
            </div>
            <div class="product-item">
                <img src="assets/helmet.png" alt="Helmet Visor">
                <p>Helmet Visor</p>
            </div>
            <div class="product-item">
                <img src="assets/cnc.png" alt="CNC">
                <p>CNC</p>
            </div>
            <div class="product-item">
                <img src="assets/windshield.png" alt="Windshield">
                <p>Windshield</p>
            </div>
            <div class="product-item">
                <img src="assets/bodycover.png" alt="Body Cover">
                <p>Body Cover</p>
            </div>
            <div class="product-item">
                <img src="assets/mirror.png" alt="Rear Mirror">
                <p>Rear Mirror</p>
            </div>
            <div class="product-item">
                <img src="assets/raincoat.png" alt="Rain Coat">
                <p>Rain Coat</p>
            </div>
            <div class="product-item">
                <img src="assets/windshield.png" alt="Grip Handle">
                <p>Grip Handle</p>
            </div>
            <div class="product-item">
                <img src="assets/bodycover.png" alt="Miscellaneous">
                <p>Miscellaneous</p>
            </div>
        </div>
    </section>
    <section class="third-section"></section>
    <section class="fourth-section">
        <div class="intro-text">
            <h2>A brief<br><span>introduction</span></h2>
            <p>At GMA Product Series, we are passionate about motorcycles and dedicated to providing top-notch accessories to enhance your riding experience. Whether you’re looking to upgrade your bike’s performance or style, we’ve got you covered.</p>
        </div>
        <div class="image-gallery">
            <div class="image-container">
                <img id="carousel-image" src="assets/backlight.png" alt="Product 1">
                <div class="overlay">
                    <p>ILLUMINATE YOUR RIDE SHINE BRIGHT!</p>
                    <h3>ONLY THE BEST</h3>
                    <button>Look closer!</button>
                </div>
                <div class="carousel-nav">
                    <button id="prev-btn" class="prev">&lt;</button>
                    <button id="next-btn" class="next">&gt;</button>
                </div>
            </div>
            <div class="image-container">
                <img src="assets/rearlight.png" alt="Product 2">
                <div class="overlay2">
                    <p>"We are proud to have served motorcycle enthusiasts since 2002, offering over 1000+ products across 6 countries, and capturing the hearts of riders everywhere."</p>
                    <button>Learn more about us</button>
                </div>
            </div>
        </div>
    </section>
    <section class="fifth-section">
        <div class="highlight-text">
            <h1>BECAUSE <span class="highlight-yellow">EVERY DETAIL</span> <span class="highlight-yellow">MATTERS</span>, WE DEDICATE OURSELVES TO PROVIDING THE HIGHEST QUALITY MOTORCYCLE ACCESSORIES TO ENSURE YOUR RIDE <span class="highlight-yellow">STANDS OUT</span>.</h1>
            <p>Each product is meticulously designed and built with the highest quality materials, ensuring not only enhanced performance but also a unique, stylish look. We believe that every rider deserves to make a statement, and our accessories are here to help you do just that.</p>
        </div>
    </section>
    <section class="sixth-section">
        <div class="overlay"></div>
        <div class="complete-look-text">
            <h1>COMPLETE THE LOOK!</h1>
            <button>Shop our collection</button>
        </div>
    </section>
    <section class="why-choose-us">
        <div class="content">
            <h1>WHY CHOOSE US</h1>
            <p>Quality, Innovation, and Customer Satisfaction are at the core of everything we do. Discover why riders trust GMA for their motorcycle accessory needs.</p>
            <button>Discover more about us</button>
        </div>
        <div class="features">
            <div class="feature-box yellow">
                <h2>01</h2>
                <h3>PREMIUM QUALITY MATERIALS</h3>
                <p>Our products are made from the finest materials to ensure durability and performance.</p>
            </div>
            <div class="feature-box black">
                <h2>02</h2>
                <h3>INNOVATIVE DESIGN</h3>
                <p>We combine cutting-edge technology with creative engineering to deliver motorcycle accessories that are both functional and stylish.</p>
            </div>
            <div class="feature-box black">
                <h2>03</h2>
                <h3>AFFORDABLE</h3>
                <p>Our commitment to affordability ensures that you can enhance and customize your ride with high-quality accessories that fit within your budget.</p>
            </div>
            <div class="feature-box black">
                <h2>04</h2>
                <h3>CUSTOMER SUPPORT</h3>
                <p>We stand by the quality of our products, offering a comprehensive warranty to give you peace of mind and confidence in your investment.</p>
            </div>
        </div>
    </section>
    <!--custom js script-->
    <script src="js/script.js"></script>
</body>
</html>

<?php
include 'footer.php';
?>

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
    /* Colors: */
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
    height: 50px; /* Adjust as needed */
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
    height: 800px; /* Adjust height as needed */
}

.video-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1; /* Ensure the video is behind the content */
}

.first-section::before,
.first-section::after {
    display: none; /* Remove the existing pseudo-elements */
}

.first-section-content {
    position: relative;
    z-index: 2; /* Ensure the content is above the video */
    color: #FFFFFF;
    text-align: center;
    align-content: center;
    align-items: center;
    margin-top: 180px;
    padding: 10px;
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

.hero2 {
    text-align: center;
    padding-top: 100px;
    background: transparent;
}

.second-section {
    position: relative;
    height: 700px; /* Adjust height as needed */
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
    height: 550px; /* Adjust height as needed */
    margin-left: 60px;
    margin-right: 60px;
    border-radius: 15px;
    background: url('assets/Fazio.png') no-repeat center center;
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
    display: flex;
    flex-wrap: wrap;
    justify-content: left;
    padding: 50px;
    gap: 10px;
}

.product-item {
    width: 290px;
    text-align: left;
}

.product-item img {
    width: 100%;
    height: 250px; /* Menyesuaikan tinggi gambar */
    object-fit: cover;
    transition: transform 0.3s;
}

.product-item img:hover {
    transform: scale(1.05);
}

.product-item p {
    margin-bottom: 20px;
}

.third-section {
    background: url('assets/nmaxx.png') no-repeat center center;
    background-size: contain;
    position: relative;
    width: 100%;
    height: 120vh;
    background-color: #10100E;
    padding-bottom: 20px;
}

/* Add media queries to adjust the image size on smaller screens */
@media (max-width: 768px) {
    .third-section {
        background-size: cover; /* Make the background cover the entire section */
        height: 60vh; /* Adjust the height for smaller screens */
    }
}

@media (max-width: 480px) {
    .third-section {
        background-size: cover; /* Ensure the background covers the entire section */
        height: 40vh; /* Adjust the height for even smaller screens */
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
    color: #10100E; /* Mengubah warna teks menjadi hitam */
}

.intro-text h2 span {
    display: inline-block; /* Membuat elemen inline-block */
    position: relative; /* Mengatur posisi relatif untuk pseudo-elemen */
}

.intro-text h2 span::after {
    content: "";
    display: block;
    width: 100%;
    height: 1px; /* Menyesuaikan tinggi garis bawah */
    background-color: #10100E; /* Warna garis bawah */
    position: absolute;
    bottom: -5px; /* Menyesuaikan jarak antara teks dan garis bawah */
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
    flex: 2; /* Lebar gambar kiri lebih besar */
}

.image-container:last-child {
    margin-top: 30px;
    flex: 1; /* Lebar gambar kanan lebih kecil */
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
    color: white; /* Mengubah warna teks menjadi hitam */
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
    background: url('assets/nmax.png') no-repeat center center;
    background-size: cover;
    height: 1200px;
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
    top: 2%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
}

.complete-look-text h1 {
    max-width: 450px;
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
    height: auto; /* Changed from fixed height to auto */
    box-sizing: border-box; /* Include padding in the element's total width and height */
    overflow: hidden; /* Prevent overflow of content */
    margin-bottom: 20px; /* Add margin to separate boxes */
}

.feature-box.yellow {
    background-color: #F7E835; /* Yellow background for the first feature */
    color: #10100E; /* Black text for contrast */
}

.feature-box.black {
    background-color: #10100E; /* Dark background for other features */
    border: 1px solid #FFFFFF;
    border-color: white;
}

.feature-box h2 {
    font-size: 40px; /* Adjusted font size */
    margin: 0 0 20px; /* Reduced bottom margin */
}

.feature-box h3 {
    font-size: 40px; /* Adjusted font size */
    margin: 0 0 10px;
}

.feature-box p {
    max-width: 100%; /* Ensure the paragraph takes full width */
    font-family: 'GeneralSans', sans-serif;
    font-size: 16px; /* Adjusted font size */
    margin: 0;
    line-height: 1.4; /* Adjusted line height */
}

/* Other CSS rules */

@media (max-width: 768px) {
    .logo {
        height: 30px; /* Adjust as needed */
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
        width: 100%; /* Full width on smaller screens */
        padding: 15px; /* Adjust padding */
    }

    .feature-box h2 {
        font-size: 24px; /* Adjusted font size */
    }

    .feature-box h3 {
        font-size: 20px; /* Adjusted font size */
    }

    .feature-box p {
        font-size: 14px; /* Adjusted font size */
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Create a 2-column grid */
        gap: 10px;
        padding: 50px 20px; /* Adjust padding for smaller screens */
    }

    .product-item {
        width: 100%; /* Ensure each product item takes full width of the grid column */
        text-align: center;
    }

    .product-item img {
        width: 100%;
        height: auto; /* Ensuring the width is 100% of the container */
        aspect-ratio: 1/1; /* Enforcing a 1:1 aspect ratio */
        object-fit: cover; /* Ensuring the image covers the container while maintaining aspect ratio */
    }

    .product-item p {
        font-size: 14px; /* Adjust the font size as needed */
        text-align: center; /* Center align text */
    }

    .intro-text {
        flex-direction: column;
        text-align: center;
    }

    .intro-text h2 {
        order: -1; /* Ensure the heading is above the description */
        font-size: 2rem; /* Adjust font size for smaller devices */
        margin-bottom: 10px; /* Add space between the heading and description */
    }

    .intro-text p {
        font-size: 1rem; /* Adjust font size for better readability */
        margin: 0; /* Reset margins */
        text-indent: 0; /* Remove text indent for better alignment */
        margin-top: 20px; /* Add top margin to separate from the heading */
    }

    .overlay p {
        font-size: 8px; /* Adjust the font size */
        margin-bottom: 5px;
    }

    .overlay h3 {
        font-size: 30px; /* Adjust the font size */
    }

    .overlay button {
        font-size: 8px; /* Adjust the font size */
        padding: 5px 20px; /* Adjust the padding */
    }

    .overlay2 p {
        font-size: 8px; /* Adjust the font size */
        line-height: 1.2; /* Adjust the line height */
    }

    .overlay2 button {
        font-size: 8px; /* Adjust the font size */
        padding: 5px 10px; /* Adjust the padding */
        margin-top: 2rem; /* Adjust the margin top */
    }

    .complete-look-text h1 {
        font-size: 50px; /* Adjust the font size */
        margin: 0 0 10px;
    }

    .complete-look-text button {
        font-size: 8px; /* Adjust the font size */
        padding: 5px 15px; /* Adjust the padding */
    }

    /* Adjustments for "Why Choose Us" section */
    .why-choose-us {
        flex-direction: column;
        align-items: center;
    }

    .content {
        max-width: 100%; /* Full width */
        text-align: center;
        margin-bottom: 20px; /* Space between sections */
    }

    .features {
        width: 100%;
        align-items: center;
    }

    .feature-box {
        max-width: 100%; /* Full width */
        margin: 10px 0; /* Space between boxes */
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
        padding: 10px; /* Adjust padding */
    }

    .feature-box h2 {
        font-size: 20px; /* Adjusted font size */
    }

    .feature-box h3 {
        font-size: 18px; /* Adjusted font size */
    }

    .feature-box p {
        font-size: 12px; /* Adjusted font size */
    }

    .product-item img {
        width: 100%;
        height: auto; /* Ensuring the width is 100% of the container */
        aspect-ratio: 1/1; /* Enforcing a 1:1 aspect ratio */
        object-fit: cover; /* Ensuring the image covers the container while maintaining aspect ratio */
    }

    .product-item p {
        font-size: 12px; /* Adjust the font size as needed */
        text-align: center; /* Center align text */
    }

    .intro-text {
        flex-direction: column;
        text-align: center;
    }

    .intro-text h2 {
        order: -1; /* Ensure the heading is above the description */
        font-size: 2rem; /* Adjust font size for smaller devices */
        margin-bottom: 10px; /* Add space between the heading and description */
    }

    .intro-text p {
        font-size: 1rem; /* Adjust font size for better readability */
        margin: 0; /* Reset margins */
        text-indent: 0; /* Remove text indent for better alignment */
        margin-top: 20px; /* Add top margin to separate from the heading */
    }

    .overlay p {
        font-size: 6px; /* Adjust the font size */
        margin-bottom: 3px;
    }

    .overlay h3 {
        font-size: 20px; /* Adjust the font size */
    }

    .overlay button {
        font-size: 6px; /* Adjust the font size */
        padding: 3px 10px; /* Adjust the padding */
    }

    .overlay2 p {
        font-size: 6px; /* Adjust the font size */
        line-height: 1; /* Adjust the line height */
    }

    .overlay2 button {
        font-size: 6px; /* Adjust the font size */
        padding: 3px 5px; /* Adjust the padding */
        margin-top: 1rem; /* Adjust the margin top */
    }

    .complete-look-text h1 {
        font-size: 30px; /* Adjust the font size */
        margin: 0 0 5px;
    }

    .complete-look-text button {
        font-size: 6px; /* Adjust the font size */
        padding: 3px 10px; /* Adjust the padding */
    }
}

</style>

<script>
  function toggleMenu() {
    const navlist = document.querySelector('.navlist');
    navlist.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', function() {
    const carouselImage = document.getElementById('carousel-image');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    const images = [
        'assets/backlight.png',
        'foto/1327658.jpeg'
    ];

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
});
</script>
