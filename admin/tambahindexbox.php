<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Index Box</h2>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul Index Box</label>
                                <input type="text" class="form-control" name="titleindexbox">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Index Box</label>
                                <textarea class="form-control" name="descindexbox" id="descindexbox" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('descindexbox', {
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
    $descindexbox = strip_tags($_POST['descindexbox'], '<br><b><i><u><strong><em>'); // Allow certain tags

    $koneksi->query("INSERT INTO indexbox
    (titleindexbox, descindexbox)
    VALUES('$_POST[titleindexbox]', '$descindexbox')");
    
    echo "<script>alert('Index Box Berhasil Di Simpan');</script>";
    echo "<script> location ='index.php?halaman=indexbox';</script>";
}
?>
