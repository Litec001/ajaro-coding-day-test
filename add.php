<!DOCTYPE html>
<html>
<head>
	<title>Kelola Data Barang</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="main-content">
		<section class="wrapper">
			<div class="row">
				<div class="col-lg-12">
					<header class="panel-heading text-center" style="background-color: black; color: white;">
						Kelola Data Barang
					</header>
				</div>
			</div>


			<div>
				<br>
			</div>

						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading" align="center">
										Input Data Barang
									</header><br>
									<div class="panel-body">
										<div class="form">
											<form name="add" class="form-validate form-horizontal" id="feedback_form" method="post" action="add.php">
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Kode	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="kode">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Nama	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="nama">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Deskripsi	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="deskripsi">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Stok	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="stok">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Harga	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="harga">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Berat	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="berat">
												</div>
											</div>
											<div class="form-group">
												<p align="center">
												<?php
													if(isset($_POST['save'])){
														$kode = $_POST['kode'];
														$nama = $_POST['nama'];
														$deskripsi = $_POST['deskripsi'];
														$stok = $_POST['stok'];
														$harga = $_POST['harga'];
														$berat = $_POST['berat'];

														include_once("config.php");

														$result = mysqli_query($mysqli, "INSERT INTO tb_barang(kode,nama,deskripsi,stok,harga,berat) VALUES('$kode','$nama','$deskripsi','$stok','$harga','$berat')");

														echo "Data telah ditambah. Klik tombol view untuk melihatnya";
													}
												?>
												</p>
												<div class="col-lg-offset-2 col-lg-10">
                        							<button class="btn btn-primary" name="save"> Save</button>
                        							<a href="index.php" class="btn btn-success"> View</a>
                        							<a href="index.php" class="btn btn-danger"> Cancel</a>
                      							</div>
											</div>	
											</form>
										</div>
									</div>
								</section>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
	</section>
</body>
</html>