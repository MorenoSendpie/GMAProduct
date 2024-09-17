<?php

$ambil = $koneksi->query("SELECT * FROM brand WHERE idbrand='$_GET[id]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM brand WHERE idbrand='$_GET[id]'");

echo "<script>alert('Brand Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=brand';</script>";
?>
