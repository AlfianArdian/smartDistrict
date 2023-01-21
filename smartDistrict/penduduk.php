<!DOCTYPE html>
<html>
<head>
	<title>Penduduk</title>
	
	<!-- <script src="js/jquery.dataTables.min.js"></script> -->
</head>
<body>
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"> -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

	<table id="dataTables" class="table table-striped table-bordered" width="100%" cellspacing="0">
	<?php include 'koneksi.php'; ?>
	<?php 
		$sql = "SELECT * FROM kk_tb";
        $hasil = mysqli_query($conn, $sql);
	?>
	    <thead>
	        <tr>
	            <th>Name</th>
	            <th>NIK</th>
	            <th>Gender</th>
	            <th>TTL</th>
	            <th>Agama</th>
	            <th>Pendidikan</th>
	        </tr>
	    </thead>
	    
	    <tbody>

	    	<?php if (mysqli_num_rows($hasil)>0) : ?>
              <?php while ($baris = mysqli_fetch_assoc($hasil)) : ?>  
                <tr>
		            <td><?php echo $baris['nama']; ?></td>
		            <td><?php echo $baris['NIK']; ?></td>
		            <td><?php echo $baris['jk']; ?></td>
		            <td><?= $baris['tempat_lahir']; ?>, <?= $baris['tanggal_lahir']; ?></td>
		            <td><?php echo $baris['agama']; ?></td>
		            <td><?php echo $baris['pendidikan']; ?></td>
		        </tr>
              <?php endwhile; ?>
            <?php else : ?>
                <?= "tidak ada satupun data artikel"; ?>
            <?php endif; ?>


	    </tbody>
	    
	 </table>
	 	<a href="form_input.php">
	    	<input class="btn btn-lg btn-primary btn-block" type="submit" value="Input">
	    </a>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#dataTables').DataTable();
		} );
	</script>

</body>
	
</html>