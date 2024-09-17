<?php
$ambil = $koneksi->query("SELECT * FROM carouselindex WHERE idcarouselindex='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>
<br><br><br>
<div class="main-content">
	<div class="section-header mb-4">
		<h2>Ubah Carousel</h2>
	</div>

	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group">
								<label>Foto Carousel</label>
								<input type="file" class="form-control" name="fotocarouselindex">
								<img src="../foto_carousel/<?php echo $data['fotocarouselindex']; ?>" width="100px">
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
	$fotocarouselindex = $_FILES["fotocarouselindex"]["name"];
	$lokasi = $_FILES["fotocarouselindex"]["tmp_name"];
	$namafile = date("YmdHis") . $fotocarouselindex;

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../foto_carousel/$namafile");
		$koneksi->query("UPDATE carouselindex SET fotocarouselindex='$namafile' WHERE idcarouselindex='$_GET[id]'");
	} else {
		$koneksi->query("UPDATE carouselindex SET fotocarouselindex=fotocarouselindex WHERE idcarouselindex='$_GET[id]'");
	}
	echo "<script>alert('Carousel Berhasil Diubah');</script>";
	echo "<script> location ='index.php?halaman=carouselindex';</script>";
}
?>
