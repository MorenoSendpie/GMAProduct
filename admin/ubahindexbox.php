<?php
$ambil = $koneksi->query("SELECT * FROM indexbox WHERE idindexbox='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Index Box</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Judul Index Box</label>
                                <input type="text" name="titleindexbox" class="form-control" value="<?php echo $data['titleindexbox']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Index Box</label>
                                <textarea name="descindexbox" class="form-control" id="descindexbox" rows="10"><?php echo $data['descindexbox']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('descindexbox', {
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
    $descindexbox = strip_tags($_POST['descindexbox'], '<br><b><i><u><strong><em>'); // Allow certain tags

    // Constructing the SQL query
    $sql = "UPDATE indexbox SET titleindexbox='$_POST[titleindexbox]', descindexbox='$descindexbox' WHERE idindexbox='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Index Box Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=indexbox';</script>";
}
?>
