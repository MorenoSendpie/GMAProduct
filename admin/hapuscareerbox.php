<?php

$ambil = $koneksi->query("SELECT * FROM careerbox WHERE idcareerbox='$_GET[id]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM careerbox WHERE idcareerbox='$_GET[id]'");

echo "<script>alert('Career Box Berhasil Di Hapus');</script>";
echo "<script>location='index.php?halaman=careerbox';</script>";
?>
