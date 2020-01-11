<?php
  include 'koneksi.php';
  session_start();

  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

  $query = mysqli_query($koneksi, "SELECT * FROM data_inv, data_user, fakultas  WHERE data_user.kode_fakultas = fakultas.kode_fakultas AND data_user.kode_fakultas = data_inv.kode_fakultas AND data_user.username = '$username' AND data_user.password = '$password' ");
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>TUGAS  AJAX USER</title>
     <link rel="stylesheet/less" href="style.less">
     <script type="text/javascript" src="less.min.js"></script>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
   </head>

   <script type="text/javascript">
     $(function() {
     		$("#filter").click(function(){
     		$("#load_data").show();
     		var jenis= $("#jenis").val();
         var kondisi= $("#kondisi").val();
             $.ajax({
                 type: "GET",
                 url: "ajax_kondisi.php?jenis=" + jenis + "&kondisi=" + kondisi,
                 success: function(msg){
                     $("#load_data").hide();
                     $('#data').html(msg);
                 }
             });
     	});
     });
   </script>

   <body>
     <h1 align="center">DATA INVENTARIS FAKULTAS <?= strtoupper($_SESSION['nm_fakultas']); ?></h1>
     <table align="center">
       <tr>
         <th>FILTER TOOLS</th>
         <th>
           <select id="jenis" name="jenis">
             <option value="">SEMUA JENIS INVENTARIS</option>
            <?php $query_jenis = mysqli_query($koneksi, "SELECT DISTINCT jenis FROM data_inv");
            while ($data_jenis = mysqli_fetch_assoc($query_jenis)) { ?>
             <option value="<?php echo $data_jenis['jenis']; ?>"><?php echo $data_jenis['jenis']; ?></option>
            <?php } ?>
           </select>
           <select id="kondisi" name="kondisi">
             <option value="">SEMUA KONDISI</option>
             <?php $query_kondisi = mysqli_query($koneksi, "SELECT DISTINCT kondisi FROM data_inv");
               while ($data_kondisi = mysqli_fetch_assoc($query_kondisi)) { ?>
              <option value="<?php echo $data_kondisi['kondisi']; ?>"><?php echo $data_kondisi['kondisi']; ?></option>
             <?php } ?>
           </select>
           <button id="filter" type="button" value="Filter">FILTER</button>
         </th>
       </tr>
     </table><br>
     <p id="data"></p>
     <table id="load_data" border="1" align="center" >
       <tr>
         <th>KODE INVENTARIS</th>
         <th>JENIS</th>
         <th>FAKULTAS</th>
         <th>BARANG</th>
         <th>KONDISI</th>
       </tr>
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
       <tr>
         <td><?php echo $data["kode_inv"]; ?></td>
         <td><?php echo $data["jenis"]; ?></td>
         <td><?php echo strtoupper($data["nm_fakultas"]); ?></td>
         <td><?php echo $data["barang"]; ?></td>
         <td><?php echo $data["kondisi"]; ?></td>
       </tr>
        <?php } ?>
     </table>
     <a align="center" href="logout.php">LOG OUT</a>
   </body>
 </html>
