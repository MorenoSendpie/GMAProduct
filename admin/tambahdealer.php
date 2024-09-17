<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Dealer</h2>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Dealer</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Dealer</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('deskripsi', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Dealer</label>
                                <input type="text" class="form-control" name="lokasi">
                            </div>
                            <div class="form-group">
                                <label>Hari Buka Dealer</label>
                                <input type="text" class="form-control" name="haribuka">
                            </div>
                            <div class="form-group">
                                <label>Jam Buka Dealer</label>
                                <input type="text" class="form-control" name="jambuka">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Dealer</label>
                                <input type="text" class="form-control" name="nomor">
                            </div>
                            <div class="form-group">
                                <label>Foto Dealer</label>
                                <div class="letak-input" style="margin-bottom: 10px;">
                                    <input type="file" class="form-control" name="foto">
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
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../foto_dealer/" . $namafoto);
    
    $deskripsi = strip_tags($_POST['deskripsi'], '<br><b><i><u><strong><em>'); // Allow certain tags

    $koneksi->query("INSERT INTO dealer
    (namadealer,deskripsidealer,lokasidealer,haribukadealer,jambukadealer,nomordealer,fotodealer)
    VALUES('$_POST[nama]','$_POST[deskripsi]','$_POST[lokasi]','$_POST[haribuka]','$_POST[jambuka]','$_POST[nomor]','$namafoto')");
    
    echo "<script>alert('Dealer Berhasil Di Simpan');</script>";
    echo "<script> location ='index.php?halaman=dealer';</script>";
}
?>
