<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="padding-top: 10px; padding-left: 40px;">
			<h3>
				Sistem Penilaian
			</h3>
			<div class="row" style="padding-top: 10px; padding-left: 40px; padding-bottom: 50px">
				<div class="col-md-8">
					<h2>Belanja Online</h2>

						<form action="" method='GET'>
						<div class="form-group row">
						<label for="nama" class="col-4 col-form-label">Customer</label> 
							<div class="col-8">
							<input id="nama" name="nama" type="text" class="form-control" required="required">
							</div>
						</div>
						<div class="form-group row">
						<label class="col-4">Pilih Produk</label> 
							<div class="col-8">
							<div class="custom-control custom-radio custom-control-inline">
								<input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
								<label for="produk_0" class="custom-control-label">TV</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
								<label for="produk_1" class="custom-control-label">Kulkas</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
								<label for="produk_2" class="custom-control-label">Mesin Cuci</label>
							</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
							<div class="col-8">
							<input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
							</div>
						</div> 
						<div class="form-group row">
							<div class="offset-4 col-8">
							<button name="submit" type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
						</form>

					



				</div>
				<div class="col-md-4" >

	

					<table class="table table-bordered text-uppercase">
						<tr class="table-info">
							<th>DAFTAR HARGA</th>
						</tr>
						<tr>
							<td>TV : Rp. 4.200.000</td>
						</tr>
						<tr>
							<td>Kulkas : Rp. 3.100.000</td>
						</tr>
						<tr>
							<td>Mesin Cuci : Rp. 3.800.000</td>
						</tr>
						<tr class="table-info">
							<th>HARGA DAPAT BERUBAH SETIAP SAAT</th>
						</tr>
					</table>

				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered text-uppercase">
						<tr class="table-info">
							<th>Nama</th>
							<th>Produk</th>
							<th>Jumlah</th>
							<th>Total Harga</th>
						</tr>
						<?php require_once "proses.php" ?>
						<tr>
						<td><?= $nama; ?></td>
							<td><?= $produk; ?></td>
							<td><?= $jumlah; ?></td>
							<td><?= 'Rp ', str_replace(",",".",number_format($total)); ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>