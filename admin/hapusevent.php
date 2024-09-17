<?php

$ambil = $koneksi->query("SELECT * FROM event WHERE idevent='$_GET[id]'");
$data = $ambil->fetch_assoc();
$fotoevent = $data['fotoevent'];
if (file_exists("../foto_event/$fotoevent")) {
    unlink("../foto_event/$fotoevent");
}

$koneksi->query("DELETE FROM event WHERE idevent='$_GET[id]'");

echo "<script>alert('Event Berhasil Di Hapus');</script>";
echo "<script>location='index.php?halaman=event';</script>";
?>
