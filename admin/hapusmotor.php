<?php

$ambil = $koneksi->query("SELECT * FROM motor WHERE idmotor='$_GET[id]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM motor WHERE idmotor='$_GET[id]'");

echo "<script>alert('Motor Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=motor';</script>";
?>
