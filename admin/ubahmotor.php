<?php
$ambil = $koneksi->query("SELECT * FROM motor WHERE idmotor='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
	<div class="section-header mb-4">
		<h2>Ubah Motor</h2>
	</div>

	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post">
						<div class="card-body">
							<div class="form-group">
								<label>Nama Motor</label>
								<input type="text" class="form-control" name="namamotor" value="<?php echo $data['namamotor']; ?>" required="">
							</div>
							<div class="form-group">
								<label>Brand</label>
								<select class="form-control" name="idbrand" required="">
									<?php
									$ambil = $koneksi->query("SELECT * FROM brand");
									while ($brand = $ambil->fetch_assoc()) {
										$selected = ($brand['idbrand'] == $data['idbrand']) ? "selected" : "";
										echo "<option value='{$brand['idbrand']}' $selected>{$brand['namabrand']}</option>";
									}
									?>
								</select>
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
	$namamotor = $_POST["namamotor"];
	$idbrand = $_POST["idbrand"];

	$koneksi->query("UPDATE motor SET namamotor='$namamotor', idbrand='$idbrand' WHERE idmotor='$_GET[id]'");
	echo "<script>alert('Motor Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=motor';</script>";
}
?>
