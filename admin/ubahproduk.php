<?php
// Fetch the product data based on the provided ID
$ambil = $koneksi->query("SELECT * FROM produk WHERE idproduk='$_GET[id]'");
$data = $ambil->fetch_assoc();

// Fetch additional images
$ambil_images = $koneksi->query("SELECT * FROM produk_images WHERE idproduk='$_GET[id]'");
$additional_images = [];
while ($image = $ambil_images->fetch_assoc()) {
    $additional_images[] = $image;
}
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Produk</h2>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="namaproduk" value="<?php echo $data['namaproduk']; ?>" required="">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="idkategori" required="">
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM kategori");
                                    while ($kategori = $ambil->fetch_assoc()) {
                                        $selected = ($kategori['idkategori'] == $data['idkategori']) ? "selected" : "";
                                        echo "<option value='{$kategori['idkategori']}' $selected>{$kategori['namakategori']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <select class="form-control" name="idbrand" required="">
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM brand");
                                    while ($brand = $ambil->fetch_assoc()) {
                                        $selected = ($brand['idbrand'] == $data['idbrand']) ? "selected" : "";
                                        echo "<option value='{$brand['idbrand']}' $selected>{$brand['namabrand']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Motor</label>
                                <select class="form-control" name="idmotor" required="">
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM motor");
                                    while ($motor = $ambil->fetch_assoc()) {
                                        $selected = ($motor['idmotor'] == $data['idmotor']) ? "selected" : "";
                                        echo "<option value='{$motor['idmotor']}' $selected>{$motor['namamotor']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="hargaproduk" value="<?php echo $data['hargaproduk']; ?>" required="">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea class="form-control" name="deskripsiproduk" required=""><?php echo $data['deskripsiproduk']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto Produk</label>
                                <input type="file" class="form-control" name="fotoproduk">
                                <img src="../foto_produk/<?php echo $data['fotoproduk']; ?>" width="100px">
                            </div>
                            <div class="form-group">
                                <label>Foto Produk Tambahan</label>
                                <div id="imageInputs">
                                    <?php foreach ($additional_images as $image): ?>
                                        <div class="input-group mb-3">
                                            <img src="../foto_produk_tambahan/<?php echo $image['fotoproduk']; ?>" width="100px">
                                            <button class="btn btn-danger" type="button" onclick="removeImageInput(this, '<?php echo $image["id_image"]; ?>')">Hapus</button>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="fotoproduk_tambahan[]">
                                        <button class="btn btn-success" type="button" onclick="addImageInput()">Tambah Foto</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Foto Perubahan</label>
                                <input type="file" class="form-control" name="foto_perubahan">
                                <img src="../foto_perubahan/<?php echo $data['foto_perubahan']; ?>" width="100px">
                            </div>
                            <div class="form-group">
                                <label>Video Produk (Optional)</label>
                                <input type="file" class="form-control" name="videoproduk">
                                <?php if (!empty($data['videoproduk'])): ?>
                                    <video width="100px" controls>
                                        <source src="../video_produk/<?php echo $data['videoproduk']; ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Kesediaan</label>
                                <select class="form-control" name="kesediaanproduk" required="">
                                    <option value="TERSEDIA" <?php if ($data['kesediaanproduk'] == 'TERSEDIA') echo 'selected'; ?>>TERSEDIA</option>
                                    <option value="TIDAK TERSEDIA" <?php if ($data['kesediaanproduk'] == 'TIDAK TERSEDIA') echo 'selected'; ?>>TIDAK TERSEDIA</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" name="ubah">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function addImageInput() {
    const imageInputs = document.getElementById('imageInputs');
    const newInput = document.createElement('div');
    newInput.classList.add('input-group', 'mb-3');
    newInput.innerHTML = `
        <input type="file" class="form-control" name="fotoproduk_tambahan[]">
        <button class="btn btn-danger" type="button" onclick="removeImageInput(this)">Hapus</button>
    `;
    imageInputs.appendChild(newInput);
}

function removeImageInput(button, id = null) {
    if (id) {
        // AJAX request to delete the image from the database
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_image.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("id=" + id);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                if (xhr.responseText == "success") {
                    button.parentElement.remove();
                } else {
                    alert("Failed to delete image: " + xhr.responseText);
                }
            }
        };
    } else {
        button.parentElement.remove();
    }
}
</script>

<?php
if (isset($_POST['ubah'])) {
    $namaproduk = $_POST["namaproduk"];
    $idkategori = $_POST["idkategori"];
    $idbrand = $_POST["idbrand"];
    $idmotor = $_POST["idmotor"];
    $hargaproduk = $_POST["hargaproduk"];
    $deskripsiproduk = $_POST["deskripsiproduk"];
    $kesediaanproduk = $_POST["kesediaanproduk"];

    // Handle the single file upload for Foto Produk
    $fotoproduk = $_FILES["fotoproduk"]["name"];
    $lokasi_foto = $_FILES["fotoproduk"]["tmp_name"];
    $fotoproduk_name = $data['fotoproduk'];

    if (!empty($lokasi_foto)) {
        $fotoproduk_name = date("YmdHis") . $fotoproduk;
        move_uploaded_file($lokasi_foto, "../foto_produk/$fotoproduk_name");
    }

    // Handle additional image uploads
    $fotoproduk_tambahan_names = [];
    foreach ($_FILES['fotoproduk_tambahan']['name'] as $index => $name) {
        if (!empty($name)) {
            $fotoproduk_tambahan_name = date("YmdHis") . $name;
            $lokasi_foto_tambahan = $_FILES['fotoproduk_tambahan']['tmp_name'][$index];
            move_uploaded_file($lokasi_foto_tambahan, "../foto_produk_tambahan/$fotoproduk_tambahan_name");
            $fotoproduk_tambahan_names[] = $fotoproduk_tambahan_name;
        }
    }

    // Handle the Foto Perubahan file upload
    $foto_perubahan = $_FILES["foto_perubahan"]["name"];
    $lokasi_foto_perubahan = $_FILES["foto_perubahan"]["tmp_name"];
    $foto_perubahan_name = $data['foto_perubahan'];

    if (!empty($lokasi_foto_perubahan)) {
        $foto_perubahan_name = date("YmdHis") . $foto_perubahan;
        move_uploaded_file($lokasi_foto_perubahan, "../foto_perubahan/$foto_perubahan_name");
    }

    // Handle optional Video Produk file upload
    $videoproduk_name = $data['videoproduk'];
    if (!empty($_FILES["videoproduk"]["tmp_name"])) {
        $videoproduk = $_FILES["videoproduk"]["name"];
        $lokasi_video = $_FILES["videoproduk"]["tmp_name"];
        $videoproduk_name = date("YmdHis") . $videoproduk;
        move_uploaded_file($lokasi_video, "../video_produk/$videoproduk_name");
    }

    $koneksi->query("UPDATE produk SET 
        namaproduk='$namaproduk', 
        idkategori='$idkategori', 
        idbrand='$idbrand', 
        idmotor='$idmotor', 
        hargaproduk='$hargaproduk', 
        deskripsiproduk='$deskripsiproduk',
        fotoproduk='$fotoproduk_name', 
        foto_perubahan='$foto_perubahan_name', 
        videoproduk='$videoproduk_name', 
        kesediaanproduk='$kesediaanproduk' 
        WHERE idproduk='$_GET[id]'");

    // Insert multiple additional images into another table, e.g., produk_images
    foreach ($fotoproduk_tambahan_names as $fotoproduk_tambahan_name) {
        $koneksi->query("INSERT INTO produk_images (idproduk, fotoproduk) VALUES ('$_GET[id]', '$fotoproduk_tambahan_name')");
    }

    echo "<script>alert('Produk Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
