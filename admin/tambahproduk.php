<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Produk</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="namaproduk" required="">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="idkategori" required="">
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM kategori");
                                    while ($kategori = $ambil->fetch_assoc()) {
                                        echo "<option value='{$kategori['idkategori']}'>{$kategori['namakategori']}</option>";
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
                                        echo "<option value='{$brand['idbrand']}'>{$brand['namabrand']}</option>";
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
                                        echo "<option value='{$motor['idmotor']}'>{$motor['namamotor']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="hargaproduk" required="">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea class="form-control" name="deskripsiproduk" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto Produk</label>
                                <input type="file" class="form-control" name="fotoproduk" required="">
                            </div>
                            <div class="form-group">
                                <label>Foto Produk Tambahan</label>
                                <div id="imageInputs">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="fotoproduk_tambahan[]" >
                                        <button class="btn btn-success" type="button" onclick="addImageInput()">Tambah Foto</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Foto Perubahan</label>
                                <input type="file" class="form-control" name="foto_perubahan" required="">
                            </div>
                            <div class="form-group">
                                <label>Video Produk (Optional)</label>
                                <input type="file" class="form-control" name="videoproduk">
                            </div>
                            <div class="form-group">
                                <label>Kesediaan</label>
                                <select class="form-control" name="kesediaanproduk" required="">
                                    <option value="TERSEDIA">TERSEDIA</option>
                                    <option value="TIDAK TERSEDIA">TIDAK TERSEDIA</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" name="tambah">Submit</button>
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
        <input type="file" class="form-control" name="fotoproduk_tambahan[]" >
        <button class="btn btn-danger" type="button" onclick="removeImageInput(this)">Hapus</button>
    `;
    imageInputs.appendChild(newInput);
}

function removeImageInput(button) {
    button.parentElement.remove();
}
</script>

<?php
if (isset($_POST['tambah'])) {
    $namaproduk = $_POST["namaproduk"];
    $idkategori = $_POST["idkategori"];
    $idbrand = $_POST["idbrand"];
    $idmotor = $_POST["idmotor"];
    $hargaproduk = $_POST["hargaproduk"];
    $deskripsiproduk = $_POST["deskripsiproduk"];

    // Handle the single file upload for Foto Produk
    $fotoproduk = $_FILES["fotoproduk"]["name"];
    $lokasi_foto = $_FILES["fotoproduk"]["tmp_name"];
    $fotoproduk_name = date("YmdHis") . $fotoproduk;
    move_uploaded_file($lokasi_foto, "../foto_produk/$fotoproduk_name");

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
    $foto_perubahan_name = date("YmdHis") . $foto_perubahan;
    move_uploaded_file($lokasi_foto_perubahan, "../foto_perubahan/$foto_perubahan_name");

    // Handle optional Video Produk file upload
    $videoproduk_name = '';
    if (!empty($_FILES["videoproduk"]["tmp_name"])) {
        $videoproduk = $_FILES["videoproduk"]["name"];
        $lokasi_video = $_FILES["videoproduk"]["tmp_name"];
        $videoproduk_name = date("YmdHis") . $videoproduk;
        move_uploaded_file($lokasi_video, "../video_produk/$videoproduk_name");
    }

    $kesediaanproduk = $_POST["kesediaanproduk"];

    // Insert product data into the produk table
    $koneksi->query("INSERT INTO produk (namaproduk, idkategori, idbrand, idmotor, hargaproduk, deskripsiproduk, fotoproduk, foto_perubahan, videoproduk, kesediaanproduk) 
        VALUES ('$namaproduk', '$idkategori', '$idbrand', '$idmotor', '$hargaproduk', '$deskripsiproduk', '$fotoproduk_name', '$foto_perubahan_name', '$videoproduk_name', '$kesediaanproduk')");

    // Get the last inserted product ID
    $last_id = $koneksi->insert_id;

    // Insert multiple additional images into another table, e.g., produk_images
    foreach ($fotoproduk_tambahan_names as $fotoproduk_tambahan_name) {
        $koneksi->query("INSERT INTO produk_images (idproduk, fotoproduk) VALUES ('$last_id', '$fotoproduk_tambahan_name')");
    }

    echo "<script>alert('Produk Berhasil Ditambah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
