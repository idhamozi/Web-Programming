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

    $result = mysqli_query(connection(), $sql);
    if($result){
			echo "Update berhasil";
      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
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
			<label>NPM</label>
			<input type="text" name="npm" id="npm" class="form-control" value="<?php echo $row['npm']; ?>" readonly><br>
		</div>

		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama']; ?>"><br>
		</div>

		<div class="form-group">
			<label>DESKRIPSI</label>
			<input type="text" name="desc_diri" id="desc_diri" class="form-control" value="<?php echo $row['desc_diri']; ?>"><br>
		</div>

		<div class="form-group">
			<label>SD</label>
			<input type="text" name="sd" id="sd" class="form-control" value="<?php echo $row['sd']; ?>"><br>
		</div>

		<div class="form-group">
			<label>SMP</label>
			<input type="text" name="smp" id="smp" class="form-control" value="<?php echo $row['smp']; ?>"><br>
		</div>

		<div class="form-group">
			<label>SMA</label>
			<input type="text" name="pend" id="pend" class="form-control" value="<?php echo $row['sma']; ?>"><br>
		</div>

		<div class="form-group">
			<label>PERGURUAN TINGGI</label>
			<input type="text" name="univ" id="univ" class="form-control" value="<?php echo $row['univ']; ?>"><br>
		</div>

    <div class="form-group">
			<label>User Instagram</label>
			<input type="text" name="ig" id="ig" class="form-control" value="<?php echo $row['ig']; ?>"><br>
		</div>

    <div class="form-group">
			<label>User Github</label>
			<input type="text" name="github" id="github" class="form-control" value="<?php echo $row['github']; ?>"><br>
		</div>

    <div class="form-group">
			<label>User Linkedin</label>
			<input type="text" name="linkedin" id="linkedin" class="form-control" value="<?php echo $row['linkedin']; ?>"><br>
		</div>

    <div class="form-group">
			<label>User Twitter</label>
			<input type="text" name="twitter" id="twitter" class="form-control" value="<?php echo $row['twitter']; ?>"><br>
		</div>

  <?php endwhile; ?>
		<input type="submit" name="submit" value="submit" class="btn btn-primary align-right">
	</form>

</div>
</div>
</body>
</html>
