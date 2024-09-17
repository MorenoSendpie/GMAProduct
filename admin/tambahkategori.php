<br><br><br>
<div class="main-content">
	<div class="section-header mb-4">
		<h2>Tambah Kategori</h2>
	</div>

	<div class="section-body">

		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" class="form-control" name="kategori" required="">
							</div>
							<div class="form-group">
								<label>Foto Kategori</label>
								<input type="file" class="form-control" name="fotokategori" required="">
							</div>
						</div>
						<div class="card-footer text-right">
							<button class="btn btn-primary" name="tambah">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</section>
</div>

<?php
if (isset($_POST['tambah'])) {
	$kategori = $_POST["kategori"];
	$fotokategori = $_FILES["fotokategori"]["name"];
	$lokasi = $_FILES["fotokategori"]["tmp_name"];
	$namafile = date("YmdHis") . $fotokategori;
	move_uploaded_file($lokasi, "../foto_kategori/$namafile");

	$koneksi->query("INSERT INTO kategori (namakategori, fotokategori) VALUES ('$kategori', '$namafile')");
	echo "<script> alert('Kategori Berhasil Ditambah');</script>";
	echo "<script> location ='index.php?halaman=kategori';</script>";
}
?>
