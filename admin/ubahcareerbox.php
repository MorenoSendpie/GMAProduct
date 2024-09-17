<?php
$ambil = $koneksi->query("SELECT * FROM careerbox WHERE idcareerbox='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Career Box</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Judul Career Box</label>
                                <input type="text" name="judulcareerbox" class="form-control" value="<?php echo $data['judulcareerbox']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Text Career Box</label>
                                <textarea name="textcareerbox" class="form-control" id="textcareerbox" rows="10"><?php echo $data['textcareerbox']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('textcareerbox', {
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
    $textcareerbox = strip_tags($_POST['textcareerbox'], '<br><b><i><u><strong><em>'); // Allow certain tags

    // Constructing the SQL query
    $sql = "UPDATE careerbox SET judulcareerbox='$_POST[judulcareerbox]', textcareerbox='$textcareerbox' WHERE idcareerbox='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Career Box Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=careerbox';</script>";
}
?>
