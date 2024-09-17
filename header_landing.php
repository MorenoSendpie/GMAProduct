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

.navbar {
    background-color: transparent !important;
    padding: 15px 20px !important;
    font-family: 'Arial', sans-serif !important;
    z-index: 3;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
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

.navbar-nav .nav-item {
    margin-right: 20px; /* Add space between navbar items */
}

.navbar-nav .nav-link {
    color: #F2EEE3 !important;
    text-transform: uppercase;
    font-size: 12px;
    font-family: 'Arial', sans-serif;
}

.fa-search {
    font-size: 1.5em;
}

.navbar-collapse {
    justify-content: center;
}

.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 4;
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

.sidebar .box {
    border: 1px solid #10100E;
    margin: 10px 0;
    padding: 25px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 36px;
    font-family: 'HighriseDemoBold', sans-serif;
    width: 100%;
}

.sidebar .box.career {
    background-color: #F7E835;
}

.sidebar .box:hover {
    background-color: #f0f0f0;
}

.sidebar .box a {
    color: #10100E;
    text-decoration: none;
    display: block;
    width: 100%;
}

.sidebar .box a:hover {
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

.search-form {
    display: none;
    transition: display 0.5s ease-in-out;
}

.search-icon {
    cursor: pointer;
}

@media (max-width: 768px) {
    .navbar {
        padding: 20px 10px !important; /* Add padding to the top and bottom */
    }
    .navbar img {
        margin-left: 0;
        padding: 0;
        margin-bottom: 5px; /* Add space below the logo */
    }
    .navbar .navbar-brand {
        margin-left: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .navbar-toggler {
        position: absolute;
        right: 10px;
        display: flex;
        align-items: center;
    }
    .fa-bars {
        display: block;
        color: white;
    }
    .hide-search {
        display: none !important;
    }
}

@media (min-width: 769px) {
    .navbar-toggler {
        display: flex;
        align-items: center;
        height: 100%;
    }
    .fa-bars {
        display: block;
        color: white;
        margin: 0 auto;
    }
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
              <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="product.php">Products</a>
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
              <form class="form-inline my-2 my-lg-0 search-form" id="searchForm" method="post" action="product.php">
                  <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
                  <button class="btn my-2 my-sm-0" type="submit" style="outline: none;"><i class="fa fa-search" style="color: white;"></i></button>
              </form>
              <a class="nav-link search-icon" href="javascript:void(0);" onclick="toggleSearch()"><i class="fa fa-search" style="color: white;"></i></a>
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
    <div class="box"><a href="history.php">HISTORY</a></div>
    <div class="box career"><a href="career.php">CAREER</a></div>
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

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.getElementById("takeALookBtn").addEventListener("click", openTakeALookNav);
document.getElementById("supportBtn").addEventListener("click", openSupportNav);
document.querySelector('.navbar-toggler').addEventListener('click', toggleSearchIcon);

function openTakeALookNav() {
    closeSupportNav();
    document.getElementById("takeALookSidebar").classList.add("open");
}

function closeTakeALookNav() {
    document.getElementById("takeALookSidebar").classList.remove("open");
}

function openSupportNav() {
    closeTakeALookNav();
    document.getElementById("supportSidebar").classList.add("open");
}

function closeSupportNav() {
    document.getElementById("supportSidebar").classList.remove("open");
}

function toggleSearchIcon() {
    document.querySelector('.search-icon').classList.toggle('hide-search');
}

function toggleSearch() {
    var searchForm = document.getElementById('searchForm');
    var searchIcon = document.querySelector('.search-icon');
    if (searchForm.style.display === 'none' || searchForm.style.display === '') {
        searchForm.style.display = 'flex';
        searchIcon.style.display = 'none';
    } else {
        searchForm.style.display = 'none';
        searchIcon.style.display = 'block';
    }
}
</script>
</body>
</html>
