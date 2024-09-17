<div class="main-content">
	<div class="section-header mb-4">
		<h2>Tambah Motor</h2>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post">
						<div class="card-body">
							<div class="form-group">
								<label>Nama Motor</label>
								<input type="text" class="form-control" name="namamotor" required="">
							</div>
							<div class="form-group">
								<label>Brand</label>
								<select class="form-control" name="idbrand" required="">
									<?php
									$ambil = $koneksi->query("SELECT * FROM brand");
									while ($brand = $ambil->fetch_assoc()) {
										echo "<option value='{$brand['idbrand']}'>{$brand['namabrand']}</option>";
									}
									?>
								</select>
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
	$namamotor = $_POST["namamotor"];
	$idbrand = $_POST["idbrand"];

	$koneksi->query("INSERT INTO motor (namamotor, idbrand) VALUES ('$namamotor', '$idbrand')");
	echo "<script>alert('Motor Berhasil Ditambah');</script>";
	echo "<script>location='index.php?halaman=motor';</script>";
}
?>
