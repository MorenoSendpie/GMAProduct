<?php
$ambil = $koneksi->query("SELECT * FROM careerdesign WHERE idcareerdesign='$_GET[id]'");
$data = $ambil->fetch_assoc();
$old_photo = $data['gambarcd'];
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Career Design</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul 1</label>
                                <input type="text" name="judul1" class="form-control" value="<?php echo $data['judul1cd']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 1</label>
                                <textarea name="desc1" class="form-control" id="desc1" rows="10"><?php echo $data['desc1cd']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('desc1', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Judul 2</label>
                                <input type="text" name="judul2" class="form-control" value="<?php echo $data['judul2cd']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 2</label>
                                <textarea name="desc2" class="form-control" id="desc2" rows="10"><?php echo $data['desc2cd']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('desc2', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Judul 3</label>
                                <input type="text" name="judul3" class="form-control" value="<?php echo $data['judul3cd']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 3</label>
                                <textarea name="desc3" class="form-control" id="desc3" rows="10"><?php echo $data['desc3cd']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('desc3', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Judul 4</label>
                                <input type="text" name="judul4" class="form-control" value="<?php echo $data['judul4cd']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 4</label>
                                <textarea name="desc4" class="form-control" id="desc4" rows="10"><?php echo $data['desc4cd']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('desc4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <img src="../foto_careerdesign/<?php echo $data['gambarcd']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label>Ganti Gambar</label>
                                <input type="file" class="form-control" name="gambar">
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
    </section>
</div>

<?php
if (isset($_POST['ubah'])) {
    $namagambar = $_FILES['gambar']['name'];
    $lokasigambar = $_FILES['gambar']['tmp_name'];
    $desc1 = strip_tags($_POST['desc1'], '<br><b><i><u><strong><em>'); // Allow certain tags
    $desc2 = strip_tags($_POST['desc2'], '<br><b><i><u><strong><em>'); // Allow certain tags
    $desc3 = strip_tags($_POST['desc3'], '<br><b><i><u><strong><em>'); // Allow certain tags
    $desc4 = strip_tags($_POST['desc4'], '<br><b><i><u><strong><em>'); // Allow certain tags

    // Constructing the SQL query
    $sql = "UPDATE careerdesign SET judul1cd='$_POST[judul1]', desc1cd='$desc1', judul2cd='$_POST[judul2]', desc2cd='$desc2', judul3cd='$_POST[judul3]', desc3cd='$desc3', judul4cd='$_POST[judul4]', desc4cd='$desc4'";

    // If new photo is uploaded, update the photo and delete the old one
    if (!empty($lokasigambar)) {
        move_uploaded_file($lokasigambar, "../foto_careerdesign/$namagambar");
        if (!empty($old_photo)) {
            unlink("../foto_careerdesign/$old_photo");
        }
        $sql .= ", gambarcd='$namagambar'";
    }

    $sql .= " WHERE idcareerdesign='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Data Career Design Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=careerdesign';</script>";
}
?>
