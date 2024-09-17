<?php

$ambil = $koneksi->query("SELECT * FROM indexbox WHERE idindexbox='$_GET[id]'");
$data = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM indexbox WHERE idindexbox='$_GET[id]'");

echo "<script>alert('Index Box Berhasil Di Hapus');</script>";
echo "<script>location='index.php?halaman=indexbox';</script>";
?>
