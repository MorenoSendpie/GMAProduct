<?php
$ambil = $koneksi->query("SELECT * FROM dealer WHERE iddealer='$_GET[id]'");
$data = $ambil->fetch_assoc();
$old_photo = $data['fotodealer'];
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Dealer</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Dealer</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $data['namadealer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Dealer</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="10"><?php echo $data['deskripsidealer']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deskripsi', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Dealer</label>
                                <input type="text" name="lokasi" class="form-control" value="<?php echo $data['lokasidealer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Hari Buka Dealer</label>
                                <input type="text" name="haribuka" class="form-control" value="<?php echo $data['haribukadealer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jam Buka Dealer</label>
                                <input type="text" name="jambuka" class="form-control" value="<?php echo $data['jambukadealer']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Dealer</label>
                                <input type="text" name="nomor" class="form-control" value="<?php echo $data['nomordealer']; ?>">
                            </div>
                            <div class="form-group">
                                <img src="../foto_dealer/<?php echo $data['fotodealer']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label>Ganti Foto</label>
                                <input type="file" class="form-control" name="foto">
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
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    $deskripsi = strip_tags($_POST['deskripsi'], '<br><b><i><u><strong><em>'); // Allow certain tags

    // Constructing the SQL query
    $sql = "UPDATE dealer SET namadealer='$_POST[nama]',deskripsidealer='$deskripsi',lokasidealer='$_POST[lokasi]',haribukadealer='$_POST[haribuka]',jambukadealer='$_POST[jambuka]',nomordealer='$_POST[nomor]'";

    // If new photo is uploaded, update the photo and delete the old one
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../foto_dealer/$namafoto");
        if (!empty($old_photo)) {
            unlink("../foto_dealer/$old_photo");
        }
        $sql .= ",fotodealer='$namafoto'";
    }

    $sql .= " WHERE iddealer='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Data Dealer Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=dealer';</script>";
}
?>
