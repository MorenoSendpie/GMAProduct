<br><br><br>
<div class="main-content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="index.php?halaman=tambahcareerdesign" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Career Design</a>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Data Career Design</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-md text-center" id="table">
								<thead class="bg-primary">
									<tr>
										<th class="text-white">No</th>
										<th class="text-white">Judul 1</th>
										<th class="text-white">Deskripsi 1</th>
										<th class="text-white">Judul 2</th>
										<th class="text-white">Deskripsi 2</th>
										<th class="text-white">Judul 3</th>
										<th class="text-white">Deskripsi 3</th>
										<th class="text-white">Judul 4</th>
										<th class="text-white">Deskripsi 4</th>
										<th class="text-white">Gambar</th>
										<th class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $nomor = 1; ?>
									<?php $ambil = $koneksi->query("SELECT * FROM careerdesign"); ?>
									<?php while ($data = $ambil->fetch_assoc()) { ?>
										<tr>
											<td><?php echo $nomor; ?></td>
											<td><?php echo $data['judul1cd'] ?></td>
											<td><?php echo $data['desc1cd'] ?></td>
											<td><?php echo $data['judul2cd'] ?></td>
											<td><?php echo $data['desc2cd'] ?></td>
											<td><?php echo $data['judul3cd'] ?></td>
											<td><?php echo $data['desc3cd'] ?></td>
											<td><?php echo $data['judul4cd'] ?></td>
											<td><?php echo $data['desc4cd'] ?></td>
											<td>
												<img src="../foto_careerdesign/<?php echo $data['gambarcd'] ?>" width="100px">
											</td>
											<td>
												<a href="index.php?halaman=ubahcareerdesign&id=<?php echo $data['idcareerdesign']; ?>" class="btn btn-warning m-1">Ubah</a>
												<a href="index.php?halaman=hapuscareerdesign&id=<?php echo $data['idcareerdesign']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
