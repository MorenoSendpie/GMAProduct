<?php
include '../koneksi.php';

if (isset($_POST['id'])) {
    $id_image = $_POST['id'];

    // Fetch the image file name to delete from the server
    $ambil = $koneksi->query("SELECT fotoproduk FROM produk_images WHERE id_image='$id_image'");
    $data = $ambil->fetch_assoc();
    $foto_produk = $data['fotoproduk'];

    // Delete the image file from the server
    if (file_exists("../foto_produk_tambahan/$foto_produk")) {
        if (unlink("../foto_produk_tambahan/$foto_produk")) {
            // Delete the image record from the database
            $koneksi->query("DELETE FROM produk_images WHERE id_image='$id_image'");
            echo "success";
        } else {
            echo "Failed to delete image file.";
        }
    } else {
        echo "Image file does not exist.";
    }
} else {
    echo "Invalid request.";
}
?>
