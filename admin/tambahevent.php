<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Event</h2>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Event</label>
                                <input type="text" class="form-control" name="namaevent" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Event</label>
                                <textarea class="form-control" name="deskripsievent" id="deskripsievent" rows="10" required></textarea>
                                <script>
                                    CKEDITOR.replace('deskripsievent', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Event</label>
                                <input type="date" class="form-control" name="tanggalevent" required>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Event</label>
                                <input type="text" class="form-control" name="lokasievent" required>
                            </div>
                            <div class="form-group">
                                <label>Foto Event</label>
                                <div class="letak-input" style="margin-bottom: 10px;">
                                    <input type="file" class="form-control" name="fotoevent" required>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" name="saveevent">Submit</button>
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
if (isset($_POST['saveevent'])) {
    $namafotoevent = $_FILES['fotoevent']['name'];
    $lokasifotoevent = $_FILES['fotoevent']['tmp_name'];
    move_uploaded_file($lokasifotoevent, "../foto_event/" . $namafotoevent);

    $deskripsievent = strip_tags($_POST['deskripsievent'], '<br><b><i><u><strong><em>'); // Allow certain tags

    $koneksi->query("INSERT INTO event (namaevent, deskripsievent, tanggalevent, lokasievent, fotoevent)
    VALUES ('$_POST[namaevent]', '$deskripsievent', '$_POST[tanggalevent]', '$_POST[lokasievent]', '$namafotoevent')");
    
    echo "<script>alert('Event Berhasil Di Simpan');</script>";
    echo "<script> location ='index.php?halaman=event';</script>";
}
?>
