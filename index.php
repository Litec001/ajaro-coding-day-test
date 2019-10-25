<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tb_barang");
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
				<br>
			</div>

			<div class="row">
				<div class="col-12">
					<section class="panel">
						<div>
							<header class="header">
								<div align="right"><a href="add.php" class="btn btn-success" style="text-align: right;">
									Tambah
								</a></div>
							</header>
						</div>
						<div>
							<br/>
							<br/>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Kode</th>
										<th>Nama</th>
										<th>Harga</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while($data_barang = mysqli_fetch_array($result)) {
									?>
									<tr>
										<td><?php echo $data_barang['kode'] ?></td>
										<td><?php echo $data_barang['nama'] ?></td>
										<td><?php echo $data_barang['harga'] ?></td>
										<td><a href="edit.php?id=<?php echo $data_barang['id'] ?>" style="color: blue;">Edit</a>  <a href="delete.php?id=<?php $data_barang['id'] ?>" style="color: red;">Delete</a></td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</section>
				</div>
			</div>
		</section>
	</section>
</body>
</html>
