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
	<h2 style="margin: 30px 0 30px 0;">Form Mahasiswa</h2>
	<form method="POST" action="AddNew.php">

		<div class="form-group">
			<label for="npm">NPM</label>
			<input type="text" name="npm" id="npm" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="nama">NAMA</label>
			<input type="text" name="nama" id="nama" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="alamat">ALAMAT</label>
			<input type="text" name="alamat" id="alamat" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="jns_kel">Jenis Kelamin</label>
			<input type="text" name="jns_kel" id="jns_kel" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="email">EMAIL</label>
			<input type="text" name="email" id="email" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="pend">Pendidikan Terakhir</label>
			<input type="text" name="pend" id="pend" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="org">Organisasi</label>
			<input type="text" name="org" id="org" class="form-control"><br>
		</div>

		<input type="submit" name="submit" value="submit" class="btn btn-primary align-right">
	</form>

</div>
</div>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		include("connection.php");

		$sql="INSERT INTO biodata(npm,nama,alamat,contact,jns_kel,pendidikan,organisasi)
							values ('".$_POST['npm']."','".$_POST['nama']."','".$_POST['alamat']."','".$_POST['email']."','".$_POST['jns_kel']."','".$_POST['pend']."','".$_POST['org']."')";
		$result = mysqli_query($connection,$sql);

		if($result){
			echo "insert berhasil";
			header("Location:http://localhost/PEMWEB/Week_5/Tugas_5/Tugas-Idham/");
			exit();
		}else{
			echo "Insert gagal";
		}
	}
?>
