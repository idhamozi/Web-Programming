
<?php
	include("connection.php");

	$query = "SELECT * FROM biodata";
	$result = mysqli_query(connection(), $query);

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
					<th>SD</th>
					<th>SMP</th>
					<th>SMA</th>
					<th>PERGURUAN TINGGI</th>
					<th>CONTACT</th>
					<th>DESKRIPSI</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody class="bg-light">
				<?php
					while ( $row = mysqli_fetch_assoc($result) ) { ?>
						<tr>
							<td><?php echo $row['npm']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['sd']; ?></td>
							<td><?php echo $row['smp']; ?></td>
							<td><?php echo $row['sma']; ?></td>
							<td><?php echo $row['univ']; ?></td>
							<td><?php echo $row['ig']."<br>".$row['github']."<br>".$row['linkedin']."<br>".$row['twitter']; ?></td>
							<td><?php echo $row['desc_diri']; ?></td>
							<td>
								<a href="<?php echo "update.php?npm=".$row['npm']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
								&nbsp;&nbsp;
								<a href="<?php echo "delete.php?npm=".$row['npm']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
								&nbsp;&nbsp;
								<a href="<?php echo "view.php?npm=".$row['npm']; ?>" class="btn btn-outline-success btn-sm"> View</a>
							</td>

						</tr>
				<?php }
				mysqli_close(connection());?>
			</tbody>
		</table>
		<center><a href="AddNew.php" class="btn btn-primary align-right">Add Data</a></center>

</body>
<script src="styles/js/bootstrap.min.js"></script>
</html>
