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
 				<?php 
            	$query = $this->db->select('*')
                            ->from('produk')
                            ->where('id', $this->input->get('id'))
                            ->get();

           		if($query->num_rows() > 0):?>
           			<?php foreach($query->result_array() as $row):
           		?>
				<form action="<?php echo base_url('crud/proses_edit').'?id='.$row['id'] ?>" method="post" class="bg-dark p-3 text-white py-5">
		            <div class="form-group">
		                <label>Nama Produk : </label>
		                <input type="text" class="form-control" name="nama" placeholder="Tulis Nama Produk" value="<?php echo $row['nama_produk'] ?>">
		            </div>

		            <div class="form-group">
		                <label>Keterangan : </label>
		                <textarea class="form-control" name="keterangan" placeholder="Tulis Keterangan"><?php echo $row['keterangan'] ?></textarea>
		            </div>

		            <div class="form-group">
		                <label>Harga : </label>
		                <input type="text" class="form-control" name="harga" placeholder="Tulis Harga" value="<?php echo $row['harga'] ?>"> 
		            </div>

		            <div class="form-group">
		                <label>Jumlah : </label>
		                <input type="text" class="form-control" name="jumlah" placeholder="Tulis Jumlah" value="<?php echo $row['jumlah'] ?>">
		            </div>
		            <button class="btn btn-info" type="submit">Simpan Perubahan</button>
		        </form>
		    <?php endforeach; ?>
		    <?php endif; ?>
 			</div>
 		</div>
	</div>
 </body>
 </html>
