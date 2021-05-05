<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-8 mx-auto">
				<a href="<?php echo base_url('crud/tambah') ?>" class="btn btn-dark my-3">Tambah</a>
				<table class="table table-striped table-dark">
					<thead>
						<tr>	
							<th>Nama Produk</th>
							<th>Keterangan</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $this->db->query('SELECT * FROM produk');
							if($query->num_rows() > 0 ) : ?>
								<?php foreach($query->result_array() as $row) :?> 
									<tr>
										<td><?php echo $row['nama_produk']; ?></td>
										<td><?php echo $row['keterangan'] ?></td>
										<td><?php echo $row['harga']; ?></td>
										<td><?php echo $row['jumlah']; ?></td>
										<td>
											<a href="<?php echo base_url('crud/edit').'?id='.$row['id'] ?>" class="btn btn-info">Edit</a>
											<a href="<?php echo base_url('crud/hapus').'?id='.$row['id'] ?>" class="btn btn-danger">Hapus</a>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
