
<?php
	include("connection.php");

	$query = "SELECT * FROM biodata";
	$result = mysqli_query($connection, $query);

	if(!$result){
		die('Gagal mengambil data'.mysqli_error());
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
</head>
<body>
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th>NPM</th>
					<th>NAMA</th>
					<th>ALAMAT</th>
					<th>JENIS KELAMIN</th>
					<th>EMAIL</th>
					<th>PEND. TERAKHIR</th>
					<th>ORGANISASI</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody class="bg-light">
				<?php
					while ( $row = mysqli_fetch_assoc($result) ) { ?>
						<tr>
							<td><?php echo $row['npm']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['alamat']; ?></td>
							<td><?php echo $row['jns_kel']; ?></td>
							<td><?php echo $row['contact']; ?></td>
							<td><?php echo $row['pendidikan']; ?></td>
							<td><?php echo $row['organisasi']; ?></td>
							<td>
								<a href="<?php echo "update.php?npm=".$row['npm']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
								&nbsp;&nbsp;
								<a href="<?php echo "delete.php?npm=".$row['npm']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
							</td>
						</tr>
				<?php }
				mysqli_close($connection);?>
			</tbody>
		</table>
		<center><a href="AddNew.php" class="btn btn-primary align-right">Add Data</a></center>

</body>
<script src="styles/js/bootstrap.min.js"></script>
</html>
