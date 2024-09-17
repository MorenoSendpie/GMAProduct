<?php
$ambil = $koneksi->query("SELECT * FROM joblist WHERE idjoblist='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Ubah Job List</h2>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="jobtitle" class="form-control" value="<?php echo $data['jobtitle']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea name="jobdesc" class="form-control" id="jobdesc" rows="10"><?php echo $data['jobdesc']; ?></textarea>
                                <script>
                                    CKEDITOR.replace('jobdesc', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Job Link</label>
                                <input type="text" name="joblink" class="form-control" value="<?php echo $data['joblink']; ?>">
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
    $jobdesc = strip_tags($_POST['jobdesc'], '<br><b><i><u><strong><em>'); // Allow certain tags

    // Constructing the SQL query
    $sql = "UPDATE joblist SET jobtitle='$_POST[jobtitle]', jobdesc='$jobdesc', joblink='$_POST[joblink]' WHERE idjoblist='$_GET[id]'";

    // Execute the SQL query
    $koneksi->query($sql);

    echo "<script>alert('Data Job List Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=joblist';</script>";
}
?>
