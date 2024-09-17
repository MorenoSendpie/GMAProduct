<?php
$ambil = $koneksi->query("SELECT * FROM event WHERE idevent='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Event</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Event</label>
                                <input type="text" name="namaevent" class="form-control" value="<?php echo $data['namaevent']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Event</label>
                                <textarea name="deskripsievent" class="form-control" id="deskripsievent" rows="10" required><?php echo $data['deskripsievent']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('deskripsievent', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Event</label>
                                <input type="date" name="tanggalevent" class="form-control" value="<?php echo $data['tanggalevent']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Lokasi Event</label>
                                <input type="text" name="lokasievent" class="form-control" value="<?php echo $data['lokasievent']; ?>" required>
                            </div>
                            <div class="form-group">
                                <img src="../foto_event/<?php echo $data['fotoevent']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label> Ganti Foto Event</label>
                                <input type="file" class="form-control" name="fotoevent">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" name="ubahevent">Submit</button>
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
if (isset($_POST['ubahevent'])) {
    $namafotoevent = $_FILES['fotoevent']['name'];
    $lokasifotoevent = $_FILES['fotoevent']['tmp_name'];

    // Check if a new photo was uploaded
    if (!empty($lokasifotoevent)) {
        // Delete the old photo
        $oldFotoEvent = $data['fotoevent'];
        if (file_exists("../foto_event/$oldFotoEvent")) {
            unlink("../foto_event/$oldFotoEvent");
        }

        // Move the new photo to the correct directory
        move_uploaded_file($lokasifotoevent, "../foto_event/$namafotoevent");
    }

    // Sanitize the 'deskripsievent' field
    $deskripsievent = strip_tags($_POST['deskripsievent'], '<br><b><i><u><strong><em>'); // Allow certain tags

    // Constructing the SQL query based on whether the photo was uploaded
    $sql = "UPDATE event SET namaevent='$_POST[namaevent]', deskripsievent='$deskripsievent', tanggalevent='$_POST[tanggalevent]', lokasievent='$_POST[lokasievent]'";

    if (!empty($namafotoevent)) {
        $sql .= ", fotoevent='$namafotoevent'";
    }

    $sql .= " WHERE idevent='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Data Event Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=event';</script>";
}
?>
