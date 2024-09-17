<?php

$ambil = $koneksi->query("SELECT * FROM historydesign WHERE idhistory='$_GET[id]'");
$data = $ambil->fetch_assoc();
$bghistory = $data['bghistory'];
$imagehistory1 = $data['imagehistory1'];
$imagehistory4 = $data['imagehistory4'];
$imagehistory6 = $data['imagehistory6'];

if (file_exists("../foto_historydesign/$bghistory")) {
    unlink("../foto_historydesign/$bghistory");
}

if (file_exists("../foto_historydesign/$imagehistory1")) {
    unlink("../foto_historydesign/$imagehistory1");
}

if (file_exists("../foto_historydesign/$imagehistory4")) {
    unlink("../foto_historydesign/$imagehistory4");
}

if (file_exists("../foto_historydesign/$imagehistory6")) {
    unlink("../foto_historydesign/$imagehistory6");
}

$koneksi->query("DELETE FROM historydesign WHERE idhistory='$_GET[id]'");

echo "<script>alert('History Design Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=historydesign';</script>";
?>
