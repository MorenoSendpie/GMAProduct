<br><br><br>
<div class="main-content">
	<div class="section-header mb-4">
		<h2>Tambah Carousel</h2>
	</div>

	<div class="section-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-12">
				<div class="card">
					<form method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group">
								<label>Foto Carousel</label>
								<input type="file" class="form-control" name="fotocarouselindex" required="">
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
	$fotocarouselindex = $_FILES["fotocarouselindex"]["name"];
	$lokasi = $_FILES["fotocarouselindex"]["tmp_name"];
	$namafile = date("YmdHis") . $fotocarouselindex;
	move_uploaded_file($lokasi, "../foto_carousel/$namafile");

	$koneksi->query("INSERT INTO carouselindex (fotocarouselindex) VALUES ('$namafile')");
	echo "<script> alert('Carousel Berhasil Ditambah');</script>";
	echo "<script> location ='index.php?halaman=carouselindex';</script>";
}
?>
