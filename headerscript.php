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
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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