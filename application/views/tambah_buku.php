<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('buku/simpan') ?>
			  
			  <div class="form-group">
			    <label for="text">Deskripsi</label>
			    <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi">
			  </div>

			  <div class="form-group">
			    <label for="text">Kategori</label>
			    <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori">
			  </div>

			  <div class="form-group">
			    <label for="text">Tanggal Bayar</label>
			    <input type="date" name="tanggal_bayar" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Transaksi</label>
			    <input type="text" name="nama_transaksi" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Nominal</label>
			    <input type="text" name="nominal" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			  <a href="<?php echo base_url() ?>buku/" class="btn btn-md btn-success">Kembali</a>
			<?php echo form_close() ?>
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