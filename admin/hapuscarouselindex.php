<?php

$ambil = $koneksi->query("SELECT * FROM carouselindex WHERE idcarouselindex='$_GET[id]'");
$data = $ambil->fetch_assoc();
$fotocarouselindex = $data['fotocarouselindex'];

if (file_exists("../foto_carousel/$fotocarouselindex")) {
    unlink("../foto_carousel/$fotocarouselindex");
}

$koneksi->query("DELETE FROM carouselindex WHERE idcarouselindex='$_GET[id]'");

echo "<script>alert('Carousel Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=carouselindex';</script>";
?>
