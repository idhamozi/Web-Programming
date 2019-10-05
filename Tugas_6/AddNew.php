<?php
	include('connection.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$npm = $_POST['npm'];
		$desc_diri = $_POST['desc_diri'];
		$sd = $_POST['sd'];
		$smp = $_POST['smp'];
		$sma = $_POST['sma'];
		$univ = $_POST['univ'];
		$nama = $_POST['nama'];
		$ig = $_POST['ig'];
		$github = $_POST['github'];
		$linkedin = $_POST['linkedin'];
		$twitter = $_POST['twitter'];

		$query = "INSERT INTO `biodata` (`npm`, `desc_diri`, `sd`, `smp`, `sma`, `univ`, `nama`, `ig`, `github`, `linkedin`, `twitter`)
							VALUES ('$npm', '$desc_diri', '$sd', '$smp', '$sma', '$univ', '$nama', '$ig', '$github', '$linkedin', '$twitter');";
		$hasil = mysqli_query(connection(), $query);
		if($hasil == false){
			echo "Eror";
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
      <div clas	s="row">
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
			<label>NPM</label>
			<input type="text" name="npm" id="npm" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="nama" id="nama" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>DESKRIPSI</label>
			<textarea type="text" name="desc_diri" id="desc_diri" class="form-control"></textarea><br>
		</div>

		<div class="form-group">
			<label>SD</label>
			<input type="text" name="sd" id="sd" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>SMP</label>
			<input type="text" name="smp" id="smp" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>SMA</label>
			<input type="text" name="sma" id="sma" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>UNIVERSITAS</label>
			<input type="text" name="univ" id="univ" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>User Instagram</label>
			<input type="text" name="ig" id="ig" class="form-control"><br>
		</div>

		<div class="form-group">
			<label>User Github</label>
			<input type="text" name="github" id="github" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="org">User Linked IN</label>
			<input type="text" name="linkedin" id="linked" class="form-control"><br>
		</div>

		<div class="form-group">
			<label for="org">User Twitter</label>
			<input type="text" name="twitter" id="twitter" class="form-control"><br>
		</div>

		<input type="submit" name="submit" value="submit" class="btn btn-primary align-right">
</form>

</div>
</div>
</body>
</html>
