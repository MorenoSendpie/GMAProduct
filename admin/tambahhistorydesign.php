<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah History Design</h2>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Background</label>
                                <input type="file" class="form-control" name="bghistory">
                            </div>
                            <div class="form-group">
                                <label>Title 1</label>
                                <input type="text" class="form-control" name="titlehistory1">
                            </div>
                            <div class="form-group">
                                <label>Image 1</label>
                                <input type="file" class="form-control" name="imagehistory1">
                            </div>
                            <div class="form-group">
                                <label>Title 2</label>
                                <input type="text" class="form-control" name="titlehistory2">
                            </div>
                            <div class="form-group">
                                <label>Description 2</label>
                                <textarea class="form-control" name="deschistory2" id="deschistory2" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory2', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Year 2</label>
                                <input type="text" class="form-control" name="yearhistory2">
                            </div>
                            <div class="form-group">
                                <label>Title 3</label>
                                <input type="text" class="form-control" name="titlehistory3">
                            </div>
                            <div class="form-group">
                                <label>Description 3</label>
                                <textarea class="form-control" name="deschistory3" id="deschistory3" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory3', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Year 3</label>
                                <input type="text" class="form-control" name="yearhistory3">
                            </div>
                            <div class="form-group">
                                <label>Button 3</label>
                                <input type="text" class="form-control" name="buttonhistory3">
                            </div>
                            <div class="form-group">
                                <label>Image 4</label>
                                <input type="file" class="form-control" name="imagehistory4">
                            </div>
                            <div class="form-group">
                                <label>Title 4</label>
                                <input type="text" class="form-control" name="titlehistory4">
                            </div>
                            <div class="form-group">
                                <label>Description 4</label>
                                <textarea class="form-control" name="deschistory4" id="deschistory4" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Year 4</label>
                                <input type="text" class="form-control" name="yearhistory4">
                            </div>
                            <div class="form-group">
                                <label>Title 5</label>
                                <input type="text" class="form-control" name="titlehistory5">
                            </div>
                            <div class="form-group">
                                <label>Description 5</label>
                                <textarea class="form-control" name="deschistory5" id="deschistory5" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory5', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Button 5</label>
                                <input type="text" class="form-control" name="buttonhistory5">
                            </div>
                            <div class="form-group">
                                <label>Year 5</label>
                                <input type="text" class="form-control" name="yearhistory5">
                            </div>
                            <div class="form-group">
                                <label>Image 6</label>
                                <input type="file" class="form-control" name="imagehistory6">
                            </div>
                            <div class="form-group">
                                <label>Title 6</label>
                                <input type="text" class="form-control" name="titlehistory6">
                            </div>
                            <div class="form-group">
                                <label>Description 6</label>
                                <textarea class="form-control" name="deschistory6" id="deschistory6" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('deschistory6', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
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
    $bghistory = $_FILES['bghistory']['name'];
    $lokasibg = $_FILES['bghistory']['tmp_name'];
    move_uploaded_file($lokasibg, "../foto_historydesign/" . $bghistory);

    $imagehistory1 = $_FILES['imagehistory1']['name'];
    $lokasihistory1 = $_FILES['imagehistory1']['tmp_name'];
    move_uploaded_file($lokasihistory1, "../foto_historydesign/" . $imagehistory1);

    $imagehistory4 = $_FILES['imagehistory4']['name'];
    $lokasihistory4 = $_FILES['imagehistory4']['tmp_name'];
    move_uploaded_file($lokasihistory4, "../foto_historydesign/" . $imagehistory4);

    $imagehistory6 = $_FILES['imagehistory6']['name'];
    $lokasihistory6 = $_FILES['imagehistory6']['tmp_name'];
    move_uploaded_file($lokasihistory6, "../foto_historydesign/" . $imagehistory6);

    $deschistory2 = strip_tags($_POST['deschistory2'], '<br><b><i><u><strong><em>');
    $deschistory3 = strip_tags($_POST['deschistory3'], '<br><b><i><u><strong><em>');
    $deschistory4 = strip_tags($_POST['deschistory4'], '<br><b><i><u><strong><em>');
    $deschistory5 = strip_tags($_POST['deschistory5'], '<br><b><i><u><strong><em>');
    $deschistory6 = strip_tags($_POST['deschistory6'], '<br><b><i><u><strong><em>');

    $koneksi->query("INSERT INTO historydesign
    (bghistory, titlehistory1, imagehistory1, titlehistory2, deschistory2, yearhistory2, titlehistory3, deschistory3, yearhistory3, buttonhistory3, imagehistory4, titlehistory4, deschistory4, yearhistory4, titlehistory5, deschistory5, buttonhistory5, yearhistory5, imagehistory6, titlehistory6, deschistory6)
    VALUES('$bghistory', '$_POST[titlehistory1]', '$imagehistory1', '$_POST[titlehistory2]', '$deschistory2', '$_POST[yearhistory2]', '$_POST[titlehistory3]', '$deschistory3', '$_POST[yearhistory3]', '$_POST[buttonhistory3]', '$imagehistory4', '$_POST[titlehistory4]', '$deschistory4', '$_POST[yearhistory4]', '$_POST[titlehistory5]', '$deschistory5', '$_POST[buttonhistory5]', '$_POST[yearhistory5]', '$imagehistory6', '$_POST[titlehistory6]', '$deschistory6')");

    echo "<script>alert('History Design Berhasil Disimpan');</script>";
    echo "<script>location='index.php?halaman=historydesign';</script>";
}
?>
