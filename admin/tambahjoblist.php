<br><br><br>
<div class="main-content">
    <div class="section-header mb-4">
        <h2>Tambah Job List</h2>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" name="jobtitle">
                            </div>
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea class="form-control" name="jobdesc" id="jobdesc" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('jobdesc', {
                                        enterMode: CKEDITOR.ENTER_BR,
                                        shiftEnterMode: CKEDITOR.ENTER_P
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Job Link</label>
                                <input type="text" class="form-control" name="joblink">
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
    $jobdesc = strip_tags($_POST['jobdesc'], '<br><b><i><u><strong><em>'); // Allow certain tags

    $koneksi->query("INSERT INTO joblist (jobtitle, jobdesc, joblink) VALUES ('$_POST[jobtitle]', '$jobdesc', '$_POST[joblink]')");

    echo "<script>alert('Job List Berhasil Disimpan');</script>";
    echo "<script>location='index.php?halaman=joblist';</script>";
}
?>
