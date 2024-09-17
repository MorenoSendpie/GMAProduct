<?php
$ambil = $koneksi->query("SELECT * FROM historydesign WHERE idhistory='$_GET[id]'");
$data = $ambil->fetch_assoc();
$old_bg = $data['bghistory'];
$old_photo1 = $data['imagehistory1'];
$old_photo4 = $data['imagehistory4'];
$old_photo6 = $data['imagehistory6'];
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah History Design</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Background</label>
                                <img src="../foto_historydesign/<?php echo $data['bghistory']; ?>" width="200">
                                <input type="file" class="form-control" name="bghistory">
                            </div>
                            <div class="form-group">
                                <label>Title 1</label>
                                <input type="text" name="titlehistory1" class="form-control" value="<?php echo $data['titlehistory1']; ?>">
                            </div>
                            <div class="form-group">
                                <img src="../foto_historydesign/<?php echo $data['imagehistory1']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label>Ganti Image 1</label>
                                <input type="file" class="form-control" name="imagehistory1">
                            </div>
                            <div class="form-group">
                                <label>Title 2</label>
                                <input type="text" name="titlehistory2" class="form-control" value="<?php echo $data['titlehistory2']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Description 2</label>
                                <textarea name="deschistory2" class="form-control" id="deschistory2" rows="10"><?php echo $data['deschistory2']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory2', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Year 2</label>
                                <input type="text" name="yearhistory2" class="form-control" value="<?php echo $data['yearhistory2']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Title 3</label>
                                <input type="text" name="titlehistory3" class="form-control" value="<?php echo $data['titlehistory3']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Description 3</label>
                                <textarea name="deschistory3" class="form-control" id="deschistory3" rows="10"><?php echo $data['deschistory3']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory3', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Year 3</label>
                                <input type="text" name="yearhistory3" class="form-control" value="<?php echo $data['yearhistory3']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Button 3</label>
                                <input type="text" name="buttonhistory3" class="form-control" value="<?php echo $data['buttonhistory3']; ?>">
                            </div>
                            <div class="form-group">
                                <img src="../foto_historydesign/<?php echo $data['imagehistory4']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label>Ganti Image 4</label>
                                <input type="file" class="form-control" name="imagehistory4">
                            </div>
                            <div class="form-group">
                                <label>Title 4</label>
                                <input type="text" name="titlehistory4" class="form-control" value="<?php echo $data['titlehistory4']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Description 4</label>
                                <textarea name="deschistory4" class="form-control" id="deschistory4" rows="10"><?php echo $data['deschistory4']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Year 4</label>
                                <input type="text" name="yearhistory4" class="form-control" value="<?php echo $data['yearhistory4']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Title 5</label>
                                <input type="text" name="titlehistory5" class="form-control" value="<?php echo $data['titlehistory5']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Description 5</label>
                                <textarea name="deschistory5" class="form-control" id="deschistory5" rows="10"><?php echo $data['deschistory5']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory5', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Button 5</label>
                                <input type="text" name="buttonhistory5" class="form-control" value="<?php echo $data['buttonhistory5']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Year 5</label>
                                <input type="text" name="yearhistory5" class="form-control" value="<?php echo $data['yearhistory5']; ?>">
                            </div>
                            <div class="form-group">
                                <img src="../foto_historydesign/<?php echo $data['imagehistory6']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label>Ganti Image 6</label>
                                <input type="file" class="form-control" name="imagehistory6">
                            </div>
                            <div class="form-group">
                                <label>Title 6</label>
                                <input type="text" name="titlehistory6" class="form-control" value="<?php echo $data['titlehistory6']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Description 6</label>
                                <textarea name="deschistory6" class="form-control" id="deschistory6" rows="10"><?php echo $data['deschistory6']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory6', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
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
    $bghistory = $_FILES['bghistory']['name'];
    $lokasibg = $_FILES['bghistory']['tmp_name'];
    $imagehistory1 = $_FILES['imagehistory1']['name'];
    $lokasihistory1 = $_FILES['imagehistory1']['tmp_name'];
    $imagehistory4 = $_FILES['imagehistory4']['name'];
    $lokasihistory4 = $_FILES['imagehistory4']['tmp_name'];
    $imagehistory6 = $_FILES['imagehistory6']['name'];
    $lokasihistory6 = $_FILES['imagehistory6']['tmp_name'];
    $deschistory2 = strip_tags($_POST['deschistory2'], '<br><b><i><u><strong><em>');
    $deschistory3 = strip_tags($_POST['deschistory3'], '<br><b><i><u><strong><em>');
    $deschistory4 = strip_tags($_POST['deschistory4'], '<br><b><i><u><strong><em>');
    $deschistory5 = strip_tags($_POST['deschistory5'], '<br><b><i><u><strong><em>');
    $deschistory6 = strip_tags($_POST['deschistory6'], '<br><b><i><u><strong><em>');

    // Constructing the SQL query
    $sql = "UPDATE historydesign SET titlehistory1='$_POST[titlehistory1]', deschistory2='$deschistory2', yearhistory2='$_POST[yearhistory2]', titlehistory3='$_POST[titlehistory3]', deschistory3='$deschistory3', yearhistory3='$_POST[yearhistory3]', buttonhistory3='$_POST[buttonhistory3]', titlehistory4='$_POST[titlehistory4]', deschistory4='$deschistory4', yearhistory4='$_POST[yearhistory4]', titlehistory5='$_POST[titlehistory5]', deschistory5='$deschistory5', buttonhistory5='$_POST[buttonhistory5]', yearhistory5='$_POST[yearhistory5]', titlehistory6='$_POST[titlehistory6]', deschistory6='$deschistory6'";

    // If new background is uploaded, update the background and delete the old one
    if (!empty($lokasibg)) {
        move_uploaded_file($lokasibg, "../foto_historydesign/$bghistory");
        if (!empty($old_bg)) {
            unlink("../foto_historydesign/$old_bg");
        }
        $sql .= ", bghistory='$bghistory'";
    }

    // If new photo is uploaded, update the photo and delete the old one
    if (!empty($lokasihistory1)) {
        move_uploaded_file($lokasihistory1, "../foto_historydesign/$imagehistory1");
        if (!empty($old_photo1)) {
            unlink("../foto_historydesign/$old_photo1");
        }
        $sql .= ", imagehistory1='$imagehistory1'";
    }

    if (!empty($lokasihistory4)) {
        move_uploaded_file($lokasihistory4, "../foto_historydesign/$imagehistory4");
        if (!empty($old_photo4)) {
            unlink("../foto_historydesign/$old_photo4");
        }
        $sql .= ", imagehistory4='$imagehistory4'";
    }

    if (!empty($lokasihistory6)) {
        move_uploaded_file($lokasihistory6, "../foto_historydesign/$imagehistory6");
        if (!empty($old_photo6)) {
            unlink("../foto_historydesign/$old_photo6");
        }
        $sql .= ", imagehistory6='$imagehistory6'";
    }

    $sql .= " WHERE idhistory='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Data History Design Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=historydesign';</script>";
}
?>
