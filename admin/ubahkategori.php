<?php
$ambil = $koneksi->query("SELECT * FROM kategori WHERE idkategori='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
	<div class="section-header mb-4">
		<h2>Ubah Kategori</h2>
	</div>

	<div class="section-body">

		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" class="form-control" name="kategori" value="<?php echo $data['namakategori']; ?>" required="">
							</div>
							<div class="form-group">
								<label>Foto Kategori</label>
								<input type="file" class="form-control" name="fotokategori">
								<img src="../foto_kategori/<?php echo $data['fotokategori']; ?>" width="100px">
							</div>
						</div>
						<div class="card-footer text-right">
							<button class="btn btn-primary" name="ubah">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</section>
</div>
<?php
if (isset($_POST['ubah'])) {
	$kategori = $_POST["kategori"];
	$fotokategori = $_FILES["fotokategori"]["name"];
	$lokasi = $_FILES["fotokategori"]["tmp_name"];
	$namafile = date("YmdHis") . $fotokategori;

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../foto_kategori/$namafile");
		$koneksi->query("UPDATE kategori SET namakategori='$kategori', fotokategori='$namafile' WHERE idkategori='$_GET[id]'");
	} else {
		$koneksi->query("UPDATE kategori SET namakategori='$kategori' WHERE idkategori='$_GET[id]'");
	}
	echo "<script>alert('Kategori Berhasil Diubah');</script>";
	echo "<script> location ='index.php?halaman=kategori';</script>";
}
?>
