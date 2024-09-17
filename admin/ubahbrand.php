<?php
$ambil = $koneksi->query("SELECT * FROM brand WHERE idbrand='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
	<div class="section-header mb-4">
		<h2>Ubah Brand</h2>
	</div>

	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post">
						<div class="card-body">
							<div class="form-group">
								<label>Nama Brand</label>
								<input type="text" class="form-control" name="brand" value="<?php echo $data['namabrand']; ?>" required="">
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
</div>

<?php
if (isset($_POST['ubah'])) {
	$brand = $_POST["brand"];
	
	$koneksi->query("UPDATE brand SET namabrand='$brand' WHERE idbrand='$_GET[id]'");

	echo "<script>alert('Brand Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=brand';</script>";
}
?>
