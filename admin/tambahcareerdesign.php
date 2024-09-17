<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Career Design</h2>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul 1</label>
                                <input type="text" class="form-control" name="judul1">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 1</label>
                                <textarea class="form-control" name="desc1" id="desc1" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('desc1', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Judul 2</label>
                                <input type="text" class="form-control" name="judul2">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 2</label>
                                <textarea class="form-control" name="desc2" id="desc2" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('desc2', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Judul 3</label>
                                <input type="text" class="form-control" name="judul3">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 3</label>
                                <textarea class="form-control" name="desc3" id="desc3" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('desc3', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Judul 4</label>
                                <input type="text" class="form-control" name="judul4">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi 4</label>
                                <textarea class="form-control" name="desc4" id="desc4" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('desc4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <div class="letak-input" style="margin-bottom: 10px;">
                                    <input type="file" class="form-control" name="gambar">
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" name="save">Submit</button>
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
if (isset($_POST['save'])) {
    $namagambar = $_FILES['gambar']['name'];
    $lokasigambar = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($lokasigambar, "../foto_careerdesign/" . $namagambar);

    $desc1 = strip_tags($_POST['desc1'], '<br><b><i><u><strong><em>'); // Allow certain tags
    $desc2 = strip_tags($_POST['desc2'], '<br><b><i><u><strong><em>'); // Allow certain tags
    $desc3 = strip_tags($_POST['desc3'], '<br><b><i><u><strong><em>'); // Allow certain tags
    $desc4 = strip_tags($_POST['desc4'], '<br><b><i><u><strong><em>'); // Allow certain tags

    $koneksi->query("INSERT INTO careerdesign
    (judul1cd, desc1cd, judul2cd, desc2cd, judul3cd, desc3cd, judul4cd, desc4cd, gambarcd)
    VALUES('$_POST[judul1]', '$desc1', '$_POST[judul2]', '$desc2', '$_POST[judul3]', '$desc3', '$_POST[judul4]', '$desc4', '$namagambar')");

    echo "<script>alert('Career Design Berhasil Disimpan');</script>";
    echo "<script>location='index.php?halaman=careerdesign';</script>";
}
?>
