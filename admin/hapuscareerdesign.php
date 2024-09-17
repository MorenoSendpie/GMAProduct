<?php

$ambil = $koneksi->query("SELECT * FROM careerdesign WHERE idcareerdesign='$_GET[id]'");
$data = $ambil->fetch_assoc();
$gambarcd = $data['gambarcd'];

if (file_exists("../foto_careerdesign/$gambarcd")) {
    unlink("../foto_careerdesign/$gambarcd");
}

$koneksi->query("DELETE FROM careerdesign WHERE idcareerdesign='$_GET[id]'");

echo "<script>alert('Career Design Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=careerdesign';</script>";
?>
