<div class="main-content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="index.php?halaman=tambahmotor" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Motor</a>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Data Motor</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-md text-center" id="table">
								<thead class="bg-primary">
									<tr>
										<th class="text-white">No</th>
										<th class="text-white">Brand</th>
										<th class="text-white">Nama Motor</th>
										<th class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$nomor = 1; 
									$ambil = $koneksi->query("
										SELECT motor.idmotor, motor.namamotor, brand.namabrand 
										FROM motor 
										JOIN brand ON motor.idbrand = brand.idbrand
									"); 
									while ($data = $ambil->fetch_assoc()) { 
									?>
										<tr>
											<td><?php echo $nomor ?></td>
											<td><?php echo $data["namabrand"] ?></td>
											<td><?php echo $data["namamotor"] ?></td>
											<td>
												<a href="index.php?halaman=ubahmotor&id=<?php echo $data['idmotor']; ?>" class="btn btn-warning btn-sm m-1">Ubah</a>
												<a href="index.php?halaman=hapusmotor&id=<?php echo $data['idmotor']; ?>" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
