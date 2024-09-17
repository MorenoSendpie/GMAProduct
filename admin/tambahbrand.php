<div class="main-content">
	<div class="section-header mb-4">
		<h2>Tambah Brand</h2>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post">
						<div class="card-body">
							<div class="form-group">
								<label>Nama Brand</label>
								<input type="text" class="form-control" name="brand" required="">
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
</div>

<?php
if (isset($_POST['tambah'])) {
	$brand = $_POST["brand"];

	$koneksi->query("INSERT INTO brand (namabrand) VALUES ('$brand')");
	echo "<script>alert('Brand Berhasil Ditambah');</script>";
	echo "<script>location='index.php?halaman=brand';</script>";
}
?>
