<?php
$ambil = $koneksi->query("SELECT * FROM landing WHERE idlanding='$_GET[id]'");
$data = $ambil->fetch_assoc();
$old_video = $data['videosection1'];
$old_image2 = $data['imagesection2'];
$old_image3 = $data['imagesection3'];
$old_image4 = $data['imagesection4'];
$old_image6 = $data['imagesection6'];
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Landing Page</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title Section 1</label>
                                <input type="text" name="titlesection1" class="form-control" value="<?php echo $data['titlesection1']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 1</label>
                                <textarea name="descsection1" class="form-control" id="descsection1" rows="10"><?php echo $data['descsection1']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('descsection1', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Video Section 1</label>
                                <video width="200" controls>
                                    <source src="../video_landing/<?php echo $data['videosection1']; ?>" type="video/mp4">
                                </video>
                                <input type="file" class="form-control" name="videosection1">
                            </div>
                            <div class="form-group">
                                <label>Title Section 2</label>
                                <input type="text" name="titlesection2" class="form-control" value="<?php echo $data['titlesection2']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Image Section 2</label>
                                <img src="../foto_landing/<?php echo $data['imagesection2']; ?>" width="200">
                                <input type="file" class="form-control" name="imagesection2">
                            </div>
                            <div class="form-group">
                                <label>Our Products Title</label>
                                <input type="text" name="ourproductstitle" class="form-control" value="<?php echo $data['ourproductstitle']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Image Section 3</label>
                                <img src="../foto_landing/<?php echo $data['imagesection3']; ?>" width="200">
                                <input type="file" class="form-control" name="imagesection3">
                            </div>
                            <div class="form-group">
                                <label>Title Section 4</label>
                                <input type="text" name="titlesection4" class="form-control" value="<?php echo $data['titlesection4']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 4</label>
                                <textarea name="descsection4" class="form-control" id="descsection4" rows="10"><?php echo $data['descsection4']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('descsection4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Title Carousel 4</label>
                                <input type="text" name="titlecarousel4" class="form-control" value="<?php echo $data['titlecarousel4']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Desc Carousel 4</label>
                                <textarea name="desccarousel4" class="form-control" id="desccarousel4" rows="10"><?php echo $data['desccarousel4']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('desccarousel4', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image Section 4</label>
                                <img src="../foto_landing/<?php echo $data['imagesection4']; ?>" width="200">
                                <input type="file" class="form-control" name="imagesection4">
                            </div>
                            <div class="form-group">
                                <label>Image Desc Section 4</label>
                                <input type="text" name="imagedescsection4" class="form-control" value="<?php echo $data['imagedescsection4']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Title Section 5</label>
                                <input type="text" name="titlesection5" class="form-control" value="<?php echo $data['titlesection5']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 5</label>
                                <textarea name="descsection5" class="form-control" id="descsection5" rows="10"><?php echo $data['descsection5']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('descsection5', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Title Section 6</label>
                                <input type="text" name="titlesection6" class="form-control" value="<?php echo $data['titlesection6']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Desc Section 6</label>
                                <textarea name="descsection6" class="form-control" id="descsection6" rows="10"><?php echo $data['descsection6']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('descsection6', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Image Section 6</label>
                                <img src="../foto_landing/<?php echo $data['imagesection6']; ?>" width="200">
                                <input type="file" class="form-control" name="imagesection6">
                            </div>
                            <div class="form-group">
                                <label>Button Text Section 6</label>
                                <input type="text" name="buttontextsection6" class="form-control" value="<?php echo $data['buttontextsection6']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Why Choose Us Title</label>
                                <input type="text" name="whychooseustitle" class="form-control" value="<?php echo $data['whychooseustitle']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Why Choose Us Desc</label>
                                <textarea name="whychooseusdesc" class="form-control" id="whychooseusdesc" rows="10"><?php echo $data['whychooseusdesc']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('whychooseusdesc', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Why Choose Us Button Text</label>
                                <input type="text" name="whychooseusbuttontext" class="form-control" value="<?php echo $data['whychooseusbuttontext']; ?>">
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
    $namavideo = $_FILES['videosection1']['name'];
    $lokasivideo = $_FILES['videosection1']['tmp_name'];
    $namaimage2 = $_FILES['imagesection2']['name'];
    $lokasiimage2 = $_FILES['imagesection2']['tmp_name'];
    $namaimage3 = $_FILES['imagesection3']['name'];
    $lokasiimage3 = $_FILES['imagesection3']['tmp_name'];
    $namaimage4 = $_FILES['imagesection4']['name'];
    $lokasiimage4 = $_FILES['imagesection4']['tmp_name'];
    $namaimage6 = $_FILES['imagesection6']['name'];
    $lokasiimage6 = $_FILES['imagesection6']['tmp_name'];

    $descsection1 = strip_tags($_POST['descsection1'], '<br><b><i><u><strong><em>');
    $descsection4 = strip_tags($_POST['descsection4'], '<br><b><i><u><strong><em>');
    $desccarousel4 = strip_tags($_POST['desccarousel4'], '<br><b><i><u><strong><em>');
    $descsection5 = strip_tags($_POST['descsection5'], '<br><b><i><u><strong><em>');
    $descsection6 = strip_tags($_POST['descsection6'], '<br><b><i><u><strong><em>');
    $whychooseusdesc = strip_tags($_POST['whychooseusdesc'], '<br><b><i><u><strong><em>');

    // Constructing the SQL query
    $sql = "UPDATE landing SET titlesection1='$_POST[titlesection1]', descsection1='$descsection1', titlesection2='$_POST[titlesection2]', ourproductstitle='$_POST[ourproductstitle]', titlesection4='$_POST[titlesection4]', descsection4='$descsection4', titlecarousel4='$_POST[titlecarousel4]', desccarousel4='$desccarousel4', imagedescsection4='$_POST[imagedescsection4]', titlesection5='$_POST[titlesection5]', descsection5='$descsection5', titlesection6='$_POST[titlesection6]', descsection6='$descsection6', buttontextsection6='$_POST[buttontextsection6]', whychooseustitle='$_POST[whychooseustitle]', whychooseusdesc='$whychooseusdesc', whychooseusbuttontext='$_POST[whychooseusbuttontext]'";

    // If new video is uploaded, update the video and delete the old one
    if (!empty($lokasivideo)) {
        move_uploaded_file($lokasivideo, "../video_landing/$namavideo");
        if (!empty($old_video)) {
            unlink("../video_landing/$old_video");
        }
        $sql .= ", videosection1='$namavideo'";
    }

    // If new image2 is uploaded, update the image and delete the old one
    if (!empty($lokasiimage2)) {
        move_uploaded_file($lokasiimage2, "../foto_landing/$namaimage2");
        if (!empty($old_image2)) {
            unlink("../foto_landing/$old_image2");
        }
        $sql .= ", imagesection2='$namaimage2'";
    }

    // If new image3 is uploaded, update the image and delete the old one
    if (!empty($lokasiimage3)) {
        move_uploaded_file($lokasiimage3, "../foto_landing/$namaimage3");
        if (!empty($old_image3)) {
            unlink("../foto_landing/$old_image3");
        }
        $sql .= ", imagesection3='$namaimage3'";
    }

    // If new image4 is uploaded, update the image and delete the old one
    if (!empty($lokasiimage4)) {
        move_uploaded_file($lokasiimage4, "../foto_landing/$namaimage4");
        if (!empty($old_image4)) {
            unlink("../foto_landing/$old_image4");
        }
        $sql .= ", imagesection4='$namaimage4'";
    }

    // If new image6 is uploaded, update the image and delete the old one
    if (!empty($lokasiimage6)) {
        move_uploaded_file($lokasiimage6, "../foto_landing/$namaimage6");
        if (!empty($old_image6)) {
            unlink("../foto_landing/$old_image6");
        }
        $sql .= ", imagesection6='$namaimage6'";
    }

    $sql .= " WHERE idlanding='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Data Landing Page Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=landing';</script>";
}
?>
