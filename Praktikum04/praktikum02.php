<?php
require_once "header.php";
require_once "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum 02 </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
// Tangkap Hasil Inputan
$proses = isset($_POST["kirim"]) ? $_POST["kirim"] : "";
$nama_customer = isset($_POST["nama"]) ? $_POST["nama"] : "";
$produk = isset($_POST["radio"]) ? $_POST["radio"] : "";
$jumlah_produk = isset($_POST["jumlah"]) ? $_POST["jumlah"] : "";
$total = "";

if ($produk === "AI"){
  $total=$jumlah_produk * 2699000;
}elseif($produk === "REM"){
  $total=$jumlah_produk * 4785000;
}
elseif($produk === "DILUC"){
  $total=$jumlah_produk * 3760000;
}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Form Belanja</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<form method="POST" action="form_belanja.php">
					<h1>Belanja Figure Online </h1>
					<hr>
 				<div class="form-group row">
   					<label for="nama" class="col-4 col-form-label">Costumer</label> 
    			<div class="col-8">
      				<input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" >		
   					</div>
				</div>
 				<div class="form-group row">
    				<label class="col-4">Produk</label> 
    				<div class="col-8">
      			<div class="custom-control custom-radio custom-control-inline">
       				<input name="radio" id="radio_0" type="radio" class="custom-control-input" value="AI"> 
        			<label for="radio_0" class="custom-control-label">AI HOSHINO</label>
      			</div>
      			<div class="custom-control custom-radio custom-control-inline">
        			<input name="radio" id="radio_1" type="radio" class="custom-control-input" value="REM"> 
        			<label for="radio_1" class="custom-control-label">REM</label>
      			</div>
      			<div class="custom-control custom-radio custom-control-inline">
       				<input name="radio" id="radio_2" type="radio" class="custom-control-input" value="DILUC"> 
        			<label for="radio_2" class="custom-control-label">DILUC</label>
      			</div>
    		</div>
  		</div>
  			<div class="form-group row">
    			<label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    		<div class="col-4">
      			<input id="jumlah" name="jumlah" type="text" class="form-control" >
   			</div>
  			</div> 
		<div class="form-group row">
    	<div class="offset-4 col-8">
			<button name="kirim" type="submit" class="btn btn-primary btn-success" value="proses">Kirim</button>
    	</div>
  		</div>
			</div>
		<div class="col-md-6">
  			<button type="button" class="list-group-item list-group-item-action active" aria-current="true" name="harga">
				Daftar Harga
  			</button>
  			<button type="button" class="list-group-item list-group-item-action">FIGURE AI HOSHINO : 2.699.000</button>
 			<button type="button" class="list-group-item list-group-item-action">FIGURE REM		   : 4.785.000</button>
  			<button type="button" class="list-group-item list-group-item-action">FIGURE DILUC	   : 3.760.000</button>
  			<button type="button" class="list-group-item list-group-item-action" disabled>Harga Sudah Termasuk PAJAK PPN 10%</button>
		</div>
			</div>
				</div>
	</form>
	<div>
	<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th>Nama Costumer :</th><br>
					<th>Produk Pilihan :</th><br>
					<th>Jumlah :</th><br>
					<th>Total Belanja :</th><br>
				</tr>
			</thead>
			<tbody>
				<tr>
		<td><?= isset($nama_customer) ? $nama_customer : ""; ?></td>
		<td><?= isset($produk) ? $produk : ""; ?></td>
		<td><?= isset($jumlah_produk) ? $jumlah_produk : ""; ?></td>
		<td><?= isset($total) ? $total : ""; ?></td>
				</tr>
			</tbody>
		</div>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
<!-- /.content-wrapper -->

<?php
require_once "footer.php";
?>