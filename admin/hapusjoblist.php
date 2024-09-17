<?php

$ambil = $koneksi->query("SELECT * FROM joblist WHERE idjoblist='$_GET[id]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM joblist WHERE idjoblist='$_GET[id]'");

echo "<script>alert('Job List Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=joblist';</script>";
?>
