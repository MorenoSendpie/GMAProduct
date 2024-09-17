<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE idproduk='$_GET[id]'");
$data = $ambil->fetch_assoc();
$fotoproduk = $data['fotoproduk'];
$foto_perubahan = $data['foto_perubahan'];
$videoproduk = $data['videoproduk'];

if (file_exists("../foto_produk/$fotoproduk")) {
    unlink("../foto_produk/$fotoproduk");
}

if (file_exists("../foto_perubahan/$foto_perubahan")) {
    unlink("../foto_perubahan/$foto_perubahan");
}

if (file_exists("../video_produk/$videoproduk")) {
    unlink("../video_produk/$videoproduk");
}

// Delete additional images
$ambil_images = $koneksi->query("SELECT * FROM produk_images WHERE idproduk='$_GET[id]'");
while ($image = $ambil_images->fetch_assoc()) {
    if (file_exists("../foto_produk_tambahan/{$image['fotoproduk']}")) {
        unlink("../foto_produk_tambahan/{$image['fotoproduk']}");
    }
}

$koneksi->query("DELETE FROM produk_images WHERE idproduk='$_GET[id]'");
$koneksi->query("DELETE FROM produk WHERE idproduk='$_GET[id]'");

echo "<script>alert('Produk Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
?>
