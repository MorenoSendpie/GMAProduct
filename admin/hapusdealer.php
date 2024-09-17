<?php

$ambil = $koneksi->query("SELECT*FROM dealer WHERE iddealer='$_GET[id]'");
$data = $ambil->fetch_assoc();
$fotodealer = $data['fotodealer'];

if (file_exists("../foto_dealer/$fotodealer")) {
    unlink("../foto_dealer/$fotodealer");
}

$koneksi->query("DELETE FROM dealer WHERE iddealer='$_GET[id]'");

echo "<script>alert('Dealer Berhasil Di Hapus');</script>";
echo "<script>location='index.php?halaman=dealer';</script>";
?>
