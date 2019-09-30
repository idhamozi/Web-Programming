<?php

include("connection.php");

  $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $npm_upd = $_GET['npm'];
          $query = "SELECT * FROM biodata WHERE npm = '$npm_upd'";

          //eksekusi query
          $result = mysqli_query($connection, $query);
      }
  }

	if(isset($_POST['submit'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jns_kel = $_POST['jns_kel'];
    $contact = $_POST['email'];
    $pendidikan = $_POST['pend'];
    $organisasi = $_POST['org'];

		$sql = "UPDATE biodata SET npm='$npm', nama='$nama', alamat='$alamat', jns_kel='$jns_kel', contact='$contact', pendidikan='$pendidikan', organisasi='$organisasi' WHERE npm='$npm'";

    $result = mysqli_query($connection, $sql);
    if($result){
			echo "Update berhasil";
			header("Location:http://localhost/PEMWEB/Week_5/Tugas_5/Tugas-Idham/");
			exit();
		}else{
			echo "Update gagal";
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="styles/css/bootstrap.min.css" rel="stylesheet">
	<link href="styles/css/dashboard.css" rel="stylesheet">

</head>
<body>
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Tugas 5 Pemrograman Web</a>
		</nav>

		<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "AddNew.php"; ?>">Tambah Data Baru</a>
              </li>
            </ul>
          </div>
        </nav>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <h2 style="margin: 30px 0 30px 0;">Update Data Mahasiswa</h2>
	<form method="POST" action="update.php">
    <?php while($row = mysqli_fetch_array($result)) : ?>
		<div class="form-group">
			<label for="npm">NPM</label>
			<input type="text" name="npm" id="npm" class="form-control" value="<?php echo $row['npm']; ?>" readonly><br>
		</div>

		<div class="form-group">
			<label for="nama">NAMA</label>
			<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama']; ?>"><br>
		</div>

		<div class="form-group">
			<label for="alamat">ALAMAT</label>
			<input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $row['alamat']; ?>"><br>
		</div>

		<div class="form-group">
			<label for="jns_kel">Jenis Kelamin</label>
			<input type="text" name="jns_kel" id="jns_kel" class="form-control" value="<?php echo $row['jns_kel']; ?>"><br>
		</div>

		<div class="form-group">
			<label for="email">EMAIL</label>
			<input type="text" name="email" id="email" class="form-control" value="<?php echo $row['contact']; ?>"><br>
		</div>

		<div class="form-group">
			<label for="pend">Pendidikan Terakhir</label>
			<input type="text" name="pend" id="pend" class="form-control" value="<?php echo $row['pendidikan']; ?>"><br>
		</div>

		<div class="form-group">
			<label for="org">Organisasi</label>
			<input type="text" name="org" id="org" class="form-control" value="<?php echo $row['organisasi']; ?>"><br>
		</div>
  <?php endwhile; ?>
		<input type="submit" name="submit" value="submit" class="btn btn-primary align-right">
	</form>

</div>
</div>
</body>
</html>
