<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Landing Page</h2>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title Section 1</label>
                                <input type="text" class="form-control" name="titlesection1">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 1</label>
                                <textarea class="form-control" name="descsection1" id="descsection1" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('descsection1', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Video Section 1</label>
                                <input type="file" class="form-control" name="videosection1">
                            </div>
                            <div class="form-group">
                                <label>Title Section 2</label>
                                <input type="text" class="form-control" name="titlesection2">
                            </div>
                            <div class="form-group">
                                <label>Image Section 2</label>
                                <input type="file" class="form-control" name="imagesection2">
                            </div>
                            <div class="form-group">
                                <label>Our Products Title</label>
                                <input type="text" class="form-control" name="ourproductstitle">
                            </div>
                            <div class="form-group">
                                <label>Image Section 3</label>
                                <input type="file" class="form-control" name="imagesection3">
                            </div>
                            <div class="form-group">
                                <label>Title Section 4</label>
                                <input type="text" class="form-control" name="titlesection4">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 4</label>
                                <textarea class="form-control" name="descsection4" id="descsection4" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('descsection4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Title Carousel 4</label>
                                <input type="text" class="form-control" name="titlecarousel4">
                            </div>
                            <div class="form-group">
                                <label>Desc Carousel 4</label>
                                <textarea class="form-control" name="desccarousel4" id="desccarousel4" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('desccarousel4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image Section 4</label>
                                <input type="file" class="form-control" name="imagesection4">
                            </div>
                            <div class="form-group">
                                <label>Image Desc Section 4</label>
                                <input type="text" class="form-control" name="imagedescsection4">
                            </div>
                            <div class="form-group">
                                <label>Title Section 5</label>
                                <input type="text" class="form-control" name="titlesection5">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 5</label>
                                <textarea class="form-control" name="descsection5" id="descsection5" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('descsection5', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Title Section 6</label>
                                <input type="text" class="form-control" name="titlesection6">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 6</label>
                                <textarea class="form-control" name="descsection6" id="descsection6" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('descsection6', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image Section 6</label>
                                <input type="file" class="form-control" name="imagesection6">
                            </div>
                            <div class="form-group">
                                <label>Button Text Section 6</label>
                                <input type="text" class="form-control" name="buttontextsection6">
                            </div>
                            <div class="form-group">
                                <label>Why Choose Us Title</label>
                                <input type="text" class="form-control" name="whychooseustitle">
                            </div>
                            <div class="form-group">
                                <label>Why Choose Us Desc</label>
                                <textarea class="form-control" name="whychooseusdesc" id="whychooseusdesc" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('whychooseusdesc', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Why Choose Us Button Text</label>
                                <input type="text" class="form-control" name="whychooseusbuttontext">
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
    $namavideo = $_FILES['videosection1']['name'];
    $lokasivideo = $_FILES['videosection1']['tmp_name'];
    move_uploaded_file($lokasivideo, "../video_landing/" . $namavideo);

    $namaimage2 = $_FILES['imagesection2']['name'];
    $lokasiimage2 = $_FILES['imagesection2']['tmp_name'];
    move_uploaded_file($lokasiimage2, "../foto_landing/" . $namaimage2);

    $namaimage3 = $_FILES['imagesection3']['name'];
    $lokasiimage3 = $_FILES['imagesection3']['tmp_name'];
    move_uploaded_file($lokasiimage3, "../foto_landing/" . $namaimage3);

    $namaimage4 = $_FILES['imagesection4']['name'];
    $lokasiimage4 = $_FILES['imagesection4']['tmp_name'];
    move_uploaded_file($lokasiimage4, "../foto_landing/" . $namaimage4);

    $namaimage6 = $_FILES['imagesection6']['name'];
    $lokasiimage6 = $_FILES['imagesection6']['tmp_name'];
    move_uploaded_file($lokasiimage6, "../foto_landing/" . $namaimage6);

    $descsection1 = strip_tags($_POST['descsection1'], '<br><b><i><u><strong><em>');
    $descsection4 = strip_tags($_POST['descsection4'], '<br><b><i><u><strong><em>');
    $desccarousel4 = strip_tags($_POST['desccarousel4'], '<br><b><i><u><strong><em>');
    $descsection5 = strip_tags($_POST['descsection5'], '<br><b><i><u><strong><em>');
    $descsection6 = strip_tags($_POST['descsection6'], '<br><b><i><u><strong><em>');
    $whychooseusdesc = strip_tags($_POST['whychooseusdesc'], '<br><b><i><u><strong><em>');

    $koneksi->query("INSERT INTO landing
    (titlesection1, descsection1, videosection1, titlesection2, imagesection2, ourproductstitle, imagesection3, titlesection4, descsection4, titlecarousel4, desccarousel4, imagesection4, imagedescsection4, titlesection5, descsection5, titlesection6, descsection6, imagesection6, buttontextsection6, whychooseustitle, whychooseusdesc, whychooseusbuttontext)
    VALUES('$_POST[titlesection1]', '$descsection1', '$namavideo', '$_POST[titlesection2]', '$namaimage2', '$_POST[ourproductstitle]', '$namaimage3', '$_POST[titlesection4]', '$descsection4', '$_POST[titlecarousel4]', '$desccarousel4', '$namaimage4', '$_POST[imagedescsection4]', '$_POST[titlesection5]', '$descsection5', '$_POST[titlesection6]', '$descsection6', '$namaimage6', '$_POST[buttontextsection6]', '$_POST[whychooseustitle]', '$whychooseusdesc', '$_POST[whychooseusbuttontext]')");
    
    echo "<script>alert('Landing Page Berhasil Di Simpan');</script>";
    echo "<script> location ='index.php?halaman=landing';</script>";
}
?>
