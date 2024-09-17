<div class="main-content">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="index.php?halaman=tambahlanding" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Landing</a>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Data Landing Page</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-md text-center" id="table">
								<thead class="bg-primary">
									<tr>
										<th class="text-white">No</th>
										<th class="text-white">ID Landing</th>
										<th class="text-white">Title Section 1</th>
										<th class="text-white">Desc Section 1</th>
										<th class="text-white">Video Section 1</th>
										<th class="text-white">Title Section 2</th>
										<th class="text-white">Image Section 2</th>
										<th class="text-white">Our Products Title</th>
										<th class="text-white">Image Section 3</th>
										<th class="text-white">Title Section 4</th>
										<th class="text-white">Desc Section 4</th>
										<th class="text-white">Title Carousel 4</th>
										<th class="text-white">Desc Carousel 4</th>
										<th class="text-white">Image Section 4</th>
										<th class="text-white">Image Desc Section 4</th>
										<th class="text-white">Title Section 5</th>
										<th class="text-white">Desc Section 5</th>
										<th class="text-white">Title Section 6</th>
										<th class="text-white">Desc Section 6</th>
										<th class="text-white">Image Section 6</th>
										<th class="text-white">Button Text Section 6</th>
										<th class="text-white">Why Choose Us Title</th>
										<th class="text-white">Why Choose Us Desc</th>
										<th class="text-white">Why Choose Us Button Text</th>
										<th class="text-white">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $nomor = 1; ?>
									<?php $ambil = $koneksi->query("SELECT * FROM landing"); ?>
									<?php while ($data = $ambil->fetch_assoc()) { ?>
										<tr>
											<td><?php echo $nomor; ?></td>
											<td><?php echo $data['idlanding'] ?></td>
											<td><?php echo $data['titlesection1'] ?></td>
											<td><?php echo $data['descsection1'] ?></td>
											<td>
												<video width="100px" controls>
													<source src="../video_landing/<?php echo $data['videosection1'] ?>" type="video/mp4">
												</video>
											</td>
											<td><?php echo $data['titlesection2'] ?></td>
											<td>
												<img src="../foto_landing/<?php echo $data['imagesection2'] ?>" width="100px">
											</td>
											<td><?php echo $data['ourproductstitle'] ?></td>
											<td>
												<img src="../foto_landing/<?php echo $data['imagesection3'] ?>" width="100px">
											</td>
											<td><?php echo $data['titlesection4'] ?></td>
											<td><?php echo $data['descsection4'] ?></td>
											<td><?php echo $data['titlecarousel4'] ?></td>
											<td><?php echo $data['desccarousel4'] ?></td>
											<td>
												<img src="../foto_landing/<?php echo $data['imagesection4'] ?>" width="100px">
											</td>
											<td><?php echo $data['imagedescsection4'] ?></td>
											<td><?php echo $data['titlesection5'] ?></td>
											<td><?php echo $data['descsection5'] ?></td>
											<td><?php echo $data['titlesection6'] ?></td>
											<td><?php echo $data['descsection6'] ?></td>
											<td>
												<img src="../foto_landing/<?php echo $data['imagesection6'] ?>" width="100px">
											</td>
											<td><?php echo $data['buttontextsection6'] ?></td>
											<td><?php echo $data['whychooseustitle'] ?></td>
											<td><?php echo $data['whychooseusdesc'] ?></td>
											<td><?php echo $data['whychooseusbuttontext'] ?></td>
											<td>
												<a href="index.php?halaman=ubahlanding&id=<?php echo $data['idlanding']; ?>" class="btn btn-warning m-1">Ubah</a>
												<a href="index.php?halaman=hapuslanding&id=<?php echo $data['idlanding']; ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
