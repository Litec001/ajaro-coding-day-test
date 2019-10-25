<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];

    $result = mysqli_query($mysqli, "UPDATE tb_barang SET kode='$kode', nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga', berat='$berat' WHERE id='$id'");

    header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM tb_barang WHERE id='$id'");

while($data_barang = mysqli_fetch_array($result))
{
	$kode = $data_barang['kode'];
	$nama = $data_barang['nama'];
	$deskripsi = $data_barang['deskripsi'];
	$stok = $data_barang['stok'];
	$harga = $data_barang['harga'];
	$berat = $data_barang['berat'];
}
?>

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
										Update Data Barang
									</header><br>
									<div class="panel-body">
										<div class="form">
											<form name="edit" class="form-validate form-horizontal" id="feedback_form" method="post" action="edit.php">
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Kode	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="kode" value="<?php echo $kode; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Nama	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="nama" value="<?php echo $nama; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Deskripsi	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="deskripsi" value="<?php echo $deskripsi; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Stok	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="stok" value="<?php echo $stok; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Harga	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="harga" value="<?php echo $harga; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="cname" class="control-label col-lg-2">
												Berat	
												</label>
												<div class="col-lg-10">
													<input class="form-control" id="cname" type="text" name="berat" value="<?php echo $berat; ?>">
												</div>
											</div>
											<div class="form-group">
                      							<div class="col-lg-offset-2 col-lg-10">
                        							<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                        							<button class="btn btn-primary" name="update"> Save</button>
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