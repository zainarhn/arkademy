<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<title>Tambah</title>
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="row mt-5">
 			<div class="col-md-8 mx-auto">
				<form action="<?php echo base_url('crud/proses_tambah') ?>" method="post" class="bg-dark p-3 text-white py-5">
		            <div class="form-group">
		                <label for="email">Nama Produk : </label>
		                <input type="text" class="form-control" name="nama" placeholder="Tulis Nama Produk" id="email">
		            </div>
		            <div class="form-group">
		                <label for="pwd">Keterangan : </label>
		                <textarea class="form-control" name="keterangan" placeholder="Tulis Keterangan" id="pwd"></textarea>
		            </div>
		            <div class="form-group">
		                <label for="pwd">Harga : </label>
		                <input type="text" class="form-control" name="harga" placeholder="Tulis Harga" id="pwd">
		            </div>
		            <div class="form-group">
		                <label for="pwd">Jumlah : </label>
		                <input type="text" class="form-control" name="jumlah" placeholder="Tulis Jumlah" id="pwd">
		            </div>
		            <button class="btn btn-info" type="submit">Simpan</button>
		        </form>
 			</div>
 		</div>
	</div>
 </body>
 </html>
