<!DOCTYPE html>
<html lang="en">
<head>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Meta tags, title, and other links -->
    <style>
        .card-img {
            transition: transform 1s ease-in-out;
        }

        .card-img:hover {
            transform: scale(1.1);
        }

        .cat_product_area {
            background-color: #10100E; /* Dark Blue Background */
            color: #F2EEE3;           /* Light Beige Text Color */
        }

        .single-product {
            background-color: #181817; /* Slightly Lighter Card Background */
        }

        .single-product .product-btm a,
        .single-product .product-btm h4,
        .single-product .product-btm span {
            color: #F2EEE3;          /* Light Beige Text for Product Details */
        }

        /* Navbar Styles */
        .navbar {
            background-color: #10100E !important;
            padding-top: 15px !important;
            padding-bottom: 15px !important;
            padding-left: 20px !important;
            font-family: 'Arial', sans-serif !important;
        }


        .navbar img { /* Target the image inside the navbar */
            margin-right: 80px;
            margin-left: 30px;
            height: 50px; /* Adjust the height as needed */
            width: auto;   /* Maintain aspect ratio */ /* Adjust the value to your preference */
        }

        .navbar-nav {
            margin: 0;          /* Remove margin */
            display: flex;     /* Use flexbox for alignment */
            float: left;       /* Float the navbar to the left */
            align-items: center; /* Align items vertically */
        }

        /* Text Color (for navbar links) */
        .navbar-nav .nav-link {
            color: #F2EEE3 !important;
            text-transform: uppercase;
            font-size: 12px; /* Adjust font size as needed */
            font-family: 'Arial', sans-serif; /* Change font family to regular sans-serif */
        }


        .navbar-nav .nav-item:last-child { 
            margin-left: auto; 
        }

        .navbar-nav .fa-search { /* Increase the size of the magnifying glass icon */
            font-size: 1.5em; /* Adjust the size as needed */
        }
        
        .navbar-collapse {
            max-height: none !important;
        }
        
        .navbar-nav .dropdown-menu {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .header_area .navbar {
          background-color: #10100E !important;
          color: #F2EEE3 !important; /* Text color for navbar links */
        }

    </style>
</head>
<?php
include 'koneksi.php';
$datakategori = array();
$ambil = $koneksi->query("SELECT * FROM kategori");
while ($tiap = $ambil->fetch_assoc()) {
  $datakategori[] = $tiap;
}
function rupiah($angka)
{
  if ($angka != "") {
    $angkafix = $angka;
  } else {
    $angkafix = 0;
  }
  $hasilrupiah = "Rp " . number_format($angkafix, 2, ',', '.');
  return $hasilrupiah;
}
function tanggal($tgl)
{
  $tanggal = substr($tgl, 8, 2);
  $bulan = bulan(substr($tgl, 5, 2));
  $tahun = substr($tgl, 0, 4);
  return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function bulan($bln)
{
  switch ($bln) {
    case 1:
      return "Januari";
      break;
    case 2:
      return "Februari";
      break;
    case 3:
      return "Maret";
      break;
    case 4:
      return "April";
      break;
    case 5:
      return "Mei";
      break;
    case 6:
      return "Juni";
      break;
    case 7:
      return "Juli";
      break;
    case 8:
      return "Agustus";
      break;
    case 9:
      return "September";
      break;
    case 10:
      return "Oktober";
      break;
    case 11:
      return "November";
      break;
    case 12:
      return "Desember";
      break;
  }
}
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/logobaru.png" type="image/png" />
    <title>GMA Product Series</title>
    <link rel="stylesheet" href="assets_home/css/bootstrap.css" />
    <link rel="stylesheet" href="assets_home/vendors/linericon/style.css" />
    <link rel="stylesheet" href="assets_home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets_home/css/themify-icons.css" />
    <link rel="stylesheet" href="assets_home/css/flaticon.css" />
    <link rel="stylesheet" href="assets_home/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets_home/vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="assets_home/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="assets_home/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="assets_home/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets_home/css/style.css" />
    <link rel="stylesheet" href="assets_home/css/responsive.css" />
    <link rel="shortcut icon" type="image/png" href="assets_home/img/logobaru.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">

  </head>

  <body>
  <header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets_home/img/LogoGMA.png" alt="" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Find Us</a>
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


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
