<br><br><br>
<div class="main-content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="index.php?halaman=tambahjoblist" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Job List</a>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Job List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center" id="table">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white">No</th>
                                        <th class="text-white">Job Title</th>
                                        <th class="text-white">Job Description</th>
                                        <th class="text-white">Job Link</th>
                                        <th class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $koneksi->query("SELECT * FROM joblist"); ?>
                                    <?php while ($data = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $data['jobtitle'] ?></td>
                                            <td><?php echo $data['jobdesc'] ?></td>
                                            <td><a href="<?php echo $data['joblink'] ?>" target="_blank"><?php echo $data['joblink'] ?></a></td>
                                            <td>
                                                <a href="index.php?halaman=ubahjoblist&id=<?php echo $data['idjoblist']; ?>" class="btn btn-warning m-1">Ubah</a>
                                                <a href="index.php?halaman=hapusjoblist&id=<?php echo $data['idjoblist']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
