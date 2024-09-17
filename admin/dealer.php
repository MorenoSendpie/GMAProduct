<br><br><br>
<div class="main-content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="index.php?halaman=tambahdealer" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Dealer</a>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Data Dealer</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-md text-center" id="table">
								<thead class="bg-primary">
									<tr>
										<th class="text-white">No</th>
										<th class="text-white">Nama</th>
										<th class="text-white">Deskripsi</th>
										<th class="text-white">Lokasi</th>
										<th class="text-white">Hari Buka</th>
										<th class="text-white">Jam Buka</th>
										<th class="text-white">Nomor Telepon</th>
										<th class="text-white">Foto</th>
										<th class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $nomor = 1; ?>
									<?php $ambil = $koneksi->query("SELECT*FROM dealer"); ?>
									<?php while ($data = $ambil->fetch_assoc()) { ?>
										<tr>
											<td><?php echo $nomor; ?></td>
											<td><?php echo $data['namadealer'] ?></td>
											<td><?php echo $data['deskripsidealer'] ?></td>
											<td><?php echo $data['lokasidealer'] ?></td>
											<td><?php echo $data['haribukadealer'] ?></td>
											<td><?php echo $data['jambukadealer'] ?></td>
											<td><?php echo $data['nomordealer'] ?></td>
											<td>
												<img src="../foto_dealer/<?php echo $data['fotodealer'] ?>" width="100px">
											</td>
											<td>
												<a href="index.php?halaman=ubahdealer&id=<?php echo $data['iddealer']; ?>" class="btn btn-warning m-1">Ubah</a>
												<a href="index.php?halaman=hapusdealer&id=<?php echo $data['iddealer']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
