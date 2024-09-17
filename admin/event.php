<div class="main-content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="index.php?halaman=tambahevent" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Event</a>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Event</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center" id="table">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white">No</th>
                                        <th class="text-white">Nama Event</th>
                                        <th class="text-white">Foto Event</th>
                                        <th class="text-white">Deskripsi Event</th>
                                        <th class="text-white">Tanggal Event</th>
                                        <th class="text-white">Lokasi Event</th>
                                        <th class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $koneksi->query("SELECT * FROM event"); ?>
                                    <?php while ($data = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $data['namaevent'] ?></td>
                                            <td>
                                                <img src="../foto_event/<?php echo $data['fotoevent'] ?>" width="100px">
                                            </td>
                                            <td><?php echo $data['deskripsievent'] ?></td>
                                            <td><?php echo $data['tanggalevent'] ?></td>
                                            <td><?php echo $data['lokasievent'] ?></td>
                                            <td>
                                                <a href="index.php?halaman=ubahevent&id=<?php echo $data['idevent']; ?>" class="btn btn-warning m-1">Ubah</a>
                                                <a href="index.php?halaman=hapusevent&id=<?php echo $data['idevent']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
    </section>
</div>
