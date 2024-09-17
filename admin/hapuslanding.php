<?php

$ambil = $koneksi->query("SELECT * FROM landing WHERE idlanding='$_GET[id]'");
$data = $ambil->fetch_assoc();
$videosection1 = $data['videosection1'];
$imagesection2 = $data['imagesection2'];
$imagesection3 = $data['imagesection3'];
$imagesection4 = $data['imagesection4'];
$imagesection6 = $data['imagesection6'];

// Delete the video file if it exists
if (file_exists("../video_landing/$videosection1")) {
    unlink("../video_landing/$videosection1");
}

// Delete the image files if they exist
if (file_exists("../foto_landing/$imagesection2")) {
    unlink("../foto_landing/$imagesection2");
}
if (file_exists("../foto_landing/$imagesection3")) {
    unlink("../foto_landing/$imagesection3");
}
if (file_exists("../foto_landing/$imagesection4")) {
    unlink("../foto_landing/$imagesection4");
}
if (file_exists("../foto_landing/$imagesection6")) {
    unlink("../foto_landing/$imagesection6");
}

// Delete the landing page entry from the database
$koneksi->query("DELETE FROM landing WHERE idlanding='$_GET[id]'");

echo "<script>alert('Landing Page Berhasil Di Hapus');</script>";
echo "<script>location='index.php?halaman=landing';</script>";
?>
