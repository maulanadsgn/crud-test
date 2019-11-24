<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>buku/tambah/" class="btn btn-md btn-success">Tambah Data</a>
        <a href="<?php echo base_url() ?>buku/" class="btn btn-md btn-success">Data</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>Deskripsi</th>
			        <th>Kategori</th>
			        <th>Tanggal Bayar</th>
			        <th>Nama Transaksi</th>
					<th>Nominal(RP)</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php
			    	$no = 1; 
			    	foreach($list_transaksi as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->deskripsi ?></td>
			        <td><?php echo $hasil->kategori ?></td>
			        <td><?php echo $hasil->tanggal_bayar ?></td>
			        <td><?php echo $hasil->nama_transaksi ?></td>
					<td><?php echo $hasil->nominal ?></td>

			      </tr>

			    <?php } ?>

			    </tbody>
			  </table>
		</div>

	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>