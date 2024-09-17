<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @font-face {
        font-family: 'HighriseDemoBold';
        src: url('fonts/HighriseDemoBold700.otf') format('opentype');
    }

    @font-face {
        font-family: 'GeneralSans';
        src: url('fonts/GeneralSans-Regular.otf') format('opentype');
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #10100E;
    }

    .main_menu .navbar {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
        z-index: 2;
        position: relative;
        background-color: transparent !important; /* Make header transparent */
    }

    .header-card-img, .all-products-box {
        transition: transform 1s ease-in-out;
        width: 100%;
        height: 0;
        padding-bottom: 100%;
        background-size: contain;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .header-card-img:hover {
        transform: scale(1.1);
    }

    .header_cat_product_area {
        background-color: #10100E;
        color: #F2EEE3;
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.5s ease-out, padding 0.5s ease-out;
    }

    .header_cat_product_area.show {
        padding: 60px 0;
        max-height: 1000px;
    }

    .header_cat_product_area .container-fluid .row > div {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .header_single-product {
        background-color: transparent;
        border: 1px solid #000;
        margin: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px;
        height: 100%;
        width: 100%;
    }

    .product-info {
        text-align: left;
        font-family: 'GeneralSans', sans-serif;
        font-size: 16px;
        color: #000;
        margin-top: 10px;
        width: 100%;
    }

    .product-info strong {
        font-weight: bold;
    }

    .navbar {
        background-color: transparent !important;
        padding: 15px 20px !important;
        font-family: 'Arial', sans-serif !important;
        z-index: 2;
        position: relative;
    }

    .navbar img {
        margin-left: 30px;
        height: 50px;
        width: auto;
    }

    .navbar-nav {
        margin: 0;
        display: flex;
        align-items: center;
    }

    .navbar-nav .nav-link {
        color: #F2EEE3 !important;
        text-transform: uppercase;
        font-size: 12px;
        font-family: 'Arial', sans-serif;
    }

    .navbar-nav .fa-search {
        font-size: 1.5em;
    }

    .navbar-collapse {
        justify-content: center;
    }

    .header_area .navbar {
        background-color: transparent !important;
        color: #F2EEE3 !important;
    }

    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 3;
        top: 0;
        right: 0;
        background-color: #FFFEE5;
        overflow-x: hidden;
        transition: 0.5s;
        color: #10100E;
        font-family: 'HighriseDemoBold', sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding-bottom: 20px;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        cursor: pointer;
    }

    .sidebar h2 {
        font-family: 'HighriseDemoBold', sans-serif;
        font-size: 60px;
        text-align: left;
        margin: 0;
        padding: 20px;
    }

    .sidebar .container {
        padding: 0 20px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .sidebar .container .box {
        border: 1px solid #10100E;
        margin: 10px 0;
        padding: 25px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 36px;
        font-family: 'HighriseDemoBold', sans-serif;
        width: 100%;
    }

    .sidebar .container .box a[href="career.php"] {
        background-color: #F7E835;
    }

    .sidebar .container .box:hover {
        background-color: #f0f0f0;
    }

    .sidebar .container .box a {
        color: #10100E;
        text-decoration: none;
        display: block;
        width: 100%;
    }

    .sidebar .container .box a:hover {
        color: #333333;
    }

    .sidebar.support {
        background-color: #10100E;
        color: #FFFEE5;
    }

    .sidebar.support .closebtn {
        color: #FFFEE5;
    }

    .sidebar.support .box {
        border: 1px solid #FFFEE5;
    }

    .sidebar.support .box a {
        color: #FFFEE5;
    }

    .sidebar.support .box:hover {
        background-color: #333333;
    }

    .sidebar.open {
        width: 400px;
    }

    .navbar-active {
        background-color: #F2EEE3 !important;
        color: #10100E !important;
    }

    .navbar-active .navbar img,
    .navbar-active .navbar .nav-link,
    .navbar-active .fa-search {
        filter: invert(100%);
    }

    .section-active {
        background-color: #F2EEE3;
        color: #10100E;
    }

    @media (max-width: 768px) {
        .navbar img {
            margin-left: 0;
            padding: 0;
        }
        .navbar .navbar-brand {
            margin-left: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .navbar {
            padding: 0 10px !important;
        }
        .navbar-toggler {
            position: absolute;
            right: 10px;
        }
        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba%28255, 255, 255, 1%29" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }
        .sidebar h2 {
            font-size: 48px;
        }
        .sidebar .container .box {
            font-size: 24px;
        }
        .navbar {
            padding: 15px !important;
        }
    }

    /* Transparent text for the fourth box */
    .header_cat_product_area .col-lg-3:nth-child(4) .product-info {
        color: transparent;
    }
  </style>
</head>
<body>
<header class="header_area">
  <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">
              <img src="assets_home/img/LogoGMA.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" id="productsBtn">Products <span id="productsBtnSymbol">+</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" id="takeALookBtn">Take a Look +</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" id="supportBtn">Support +</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="dealer.php">Find a Dealer</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <a class="nav-link" href="#">
                      <i class="fa fa-search" style="color: white; font-size: 1.5em;"></i> 
                  </a>
              </form>
          </div>
      </nav>
  </div>
</header>

<!-- Take a Look Sidebar -->
<div id="takeALookSidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeTakeALookNav()">&times;</a>
  <h2>TAKE A LOOK</h2>
  <div class="container">
    <div class="box"><a href="event.php">EVENTS</a></div>
    <div class="box"><a href="#">HISTORY</a></div>
    <div class="box" style="background-color: #F7E835;"><a href="career.php">CAREER</a></div>
  </div>
</div>

<!-- Support Sidebar -->
<div id="supportSidebar" class="sidebar support">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSupportNav()">&times;</a>
  <h2>SUPPORT</h2>
  <div class="container">
    <div class="box"><a href="#">MANUALS</a></div>
    <div class="box"><a href="#">WARRANTY</a></div>
    <div class="box"><a href="contactus.php">CONTACT</a></div>
  </div>
</div>

<!-- Product Content Container -->
<div id="productsContent">
  <section class="header_cat_product_area section_gap">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <div class="header_single-product">
            <div class="header-card-img" style="background-image: url('foto/audy.png');"></div>
          </div>
          <div class="product-info">
              <strong>Product Name</strong><br>
              Rp. 100.000
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <div class="header_single-product">
            <div class="header-card-img" style="background-image: url('foto/audy.png');"></div>
          </div>
          <div class="product-info">
              <strong>Product Name</strong><br>
              Rp. 100.000
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <div class="header_single-product">
            <div class="header-card-img" style="background-image: url('foto/audy.png');"></div>
          </div>
          <div class="product-info">
              <strong>Product Name</strong><br>
              Rp. 100.000
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <div class="header_single-product">
            <div class="header-card-img" style="background-image: url('foto/allproducts.jpg');" onclick="redirectToProduct()"></div>
          </div>
          <div class="product-info">
              <strong>Product Name</strong><br>
              Rp. 100.000
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function toggleProductsContent() {
    const productsContent = document.getElementById("productsContent");
    const productsBtnSymbol = document.getElementById("productsBtnSymbol");
    const navbar = document.querySelector('.navbar');
    const headerArea = document.querySelector('.header_area');
    const section = document.querySelector('.header_cat_product_area');

    if (section.style.maxHeight === "0px" || section.style.maxHeight === "") {
        openProductsContent();
        productsBtnSymbol.innerHTML = "-";
        navbar.classList.add('navbar-active');
        headerArea.classList.add('navbar-active');
        section.classList.add('section-active');
    } else {
        closeProductsContent();
        productsBtnSymbol.innerHTML = "+";
        navbar.classList.remove('navbar-active');
        headerArea.classList.remove('navbar-active');
        section.classList.remove('section-active');
    }
}

function openProductsContent() {
    closeTakeALookNav();
    closeSupportNav();
    const section = document.querySelector('.header_cat_product_area');
    section.style.padding = "60px 0";
    section.style.maxHeight = "1000px";
}

function closeProductsContent() {
    const section = document.querySelector('.header_cat_product_area');
    section.style.padding = "0";
    section.style.maxHeight = "0";
}

document.getElementById("productsBtn").addEventListener("click", toggleProductsContent);

function openTakeALookNav() {
    closeSupportNav();
    closeProductsContent();
    document.getElementById("takeALookSidebar").classList.add("open");
}

function closeTakeALookNav() {
    document.getElementById("takeALookSidebar").classList.remove("open");
}

document.getElementById("takeALookBtn").addEventListener("click", openTakeALookNav);

function openSupportNav() {
    closeTakeALookNav();
    closeProductsContent();
    document.getElementById("supportSidebar").classList.add("open");
}

function closeSupportNav() {
    document.getElementById("supportSidebar").classList.remove("open");
}

document.getElementById("supportBtn").addEventListener("click", openSupportNav);

function redirectToProduct() {
    window.location.href = "product.php";
}
</script>
</body>
</html>