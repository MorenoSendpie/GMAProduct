<?php

$ambil = $koneksi->query("SELECT * FROM kategori WHERE idkategori='$_GET[id]'");
$data = $ambil->fetch_assoc();
$fotokategori = $data['fotokategori'];

if (file_exists("../foto_kategori/$fotokategori")) {
    unlink("../foto_kategori/$fotokategori");
}

$koneksi->query("DELETE FROM kategori WHERE idkategori='$_GET[id]'");

echo "<script>alert('Kategori Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=kategori';</script>";
?>
