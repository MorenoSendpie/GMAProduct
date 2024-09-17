<div class="main-content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="index.php?halaman=tambahindexbox" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Indexbox</a>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Indexbox</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center" id="table">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white">No</th>
                                        <th class="text-white">Judul Indexbox</th>
                                        <th class="text-white">Deskripsi Indexbox</th>
                                        <th class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $koneksi->query("SELECT * FROM indexbox"); ?>
                                    <?php while ($data = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $data['titleindexbox'] ?></td>
                                            <td><?php echo $data['descindexbox'] ?></td>
                                            <td>
                                                <a href="index.php?halaman=ubahindexbox&id=<?php echo $data['idindexbox']; ?>" class="btn btn-warning m-1">Ubah</a>
                                                <a href="index.php?halaman=hapusindexbox&id=<?php echo $data['idindexbox']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
