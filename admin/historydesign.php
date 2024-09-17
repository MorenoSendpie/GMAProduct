<br><br><br>
<div class="main-content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="index.php?halaman=tambahhistorydesign" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah History Design</a>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data History Design</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center" id="table">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white">No</th>
                                        <th class="text-white">Background</th>
                                        <th class="text-white">Title 1</th>
                                        <th class="text-white">Image 1</th>
                                        <th class="text-white">Title 2</th>
                                        <th class="text-white">Description 2</th>
                                        <th class="text-white">Year 2</th>
                                        <th class="text-white">Title 3</th>
                                        <th class="text-white">Description 3</th>
                                        <th class="text-white">Year 3</th>
                                        <th class="text-white">Button 3</th>
                                        <th class="text-white">Image 4</th>
                                        <th class="text-white">Title 4</th>
                                        <th class="text-white">Description 4</th>
                                        <th class="text-white">Year 4</th>
                                        <th class="text-white">Title 5</th>
                                        <th class="text-white">Description 5</th>
                                        <th class="text-white">Button 5</th>
                                        <th class="text-white">Year 5</th>
                                        <th class="text-white">Image 6</th>
                                        <th class="text-white">Title 6</th>
                                        <th class="text-white">Description 6</th>
                                        <th class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $koneksi->query("SELECT * FROM historydesign"); ?>
                                    <?php while ($data = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td>
                                                <img src="../foto_historydesign/<?php echo $data['bghistory'] ?>" width="100px">
                                            </td>
                                            <td><?php echo $data['titlehistory1'] ?></td>
                                            <td>
                                                <img src="../foto_historydesign/<?php echo $data['imagehistory1'] ?>" width="100px">
                                            </td>
                                            <td><?php echo $data['titlehistory2'] ?></td>
                                            <td><?php echo $data['deschistory2'] ?></td>
                                            <td><?php echo $data['yearhistory2'] ?></td>
                                            <td><?php echo $data['titlehistory3'] ?></td>
                                            <td><?php echo $data['deschistory3'] ?></td>
                                            <td><?php echo $data['yearhistory3'] ?></td>
                                            <td><?php echo $data['buttonhistory3'] ?></td>
                                            <td>
                                                <img src="../foto_historydesign/<?php echo $data['imagehistory4'] ?>" width="100px">
                                            </td>
                                            <td><?php echo $data['titlehistory4'] ?></td>
                                            <td><?php echo $data['deschistory4'] ?></td>
                                            <td><?php echo $data['yearhistory4'] ?></td>
                                            <td><?php echo $data['titlehistory5'] ?></td>
                                            <td><?php echo $data['deschistory5'] ?></td>
                                            <td><?php echo $data['buttonhistory5'] ?></td>
                                            <td><?php echo $data['yearhistory5'] ?></td>
                                            <td>
                                                <img src="../foto_historydesign/<?php echo $data['imagehistory6'] ?>" width="100px">
                                            </td>
                                            <td><?php echo $data['titlehistory6'] ?></td>
                                            <td><?php echo $data['deschistory6'] ?></td>
                                            <td>
                                                <a href="index.php?halaman=ubahhistorydesign&id=<?php echo $data['idhistory']; ?>" class="btn btn-warning m-1">Ubah</a>
                                                <a href="index.php?halaman=hapushistorydesign&id=<?php echo $data['idhistory']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
