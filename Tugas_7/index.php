<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      include 'config.php';
      $db = new Database();
      $connection = $db->connect;
     ?>

     <table>
       <h2>Transkrip Nilai</h2>
       <tr>
         <td>
           <p>NPM</p>
           <p>Nama</p>
           <p>Program Studi</p>
           <p>Fakultas</p>
         </td>
         <?php
           foreach ($db->show() as $tampil)
            ?>
            <td>
              <p>: <?php echo $tampil['npm'] ?> </p>
              <p>: <?php echo $tampil['nama'] ?> </p>
              <p>: <?php echo $tampil['prodi'] ?> </p>
              <p>: <?php echo $tampil['fakultas'] ?> </p>
            </td>
       </tr>
     </table>

     <table border="1">
       <thead>
         <tr>
           <th>NPM</th>
           <th>Nama</th>
           <th>Program Studi</th>
           <th>Mata Kuliah</th>
           <th>Nilai</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $ips = 0;
         $sks = 0;
         $nilai_akhir = 0;
          foreach ($db->show_all() as $tampil_semua) { ?>
            <tr>
              <td> <?php echo $tampil_semua['npm'] ?> </td>
              <td> <?php echo $tampil_semua['nama'] ?> </td>
              <td> <?php echo $tampil_semua['prodi'] ?> </td>
              <td> <?php echo $tampil_semua['nama_mk'] ?> </td>
              <td> <?php echo $tampil_semua['nilai'] ?> </td>
            </tr>
          <?php
          switch ($tampil_semua['nilai']) {
            case 'A':
              $nilai = 4;
              $ips = $ips + $nilai;
              break;
            case 'B':
              $nilai = 3;
              $ips = $ips + $nilai;
              break;
            case 'C':
              $nilai = 2;
              $ips = $ips + $nilai;
              break;
            case 'D':
              $nilai = 1;
              $ips = $ips + $nilai;
              break;
            case 'E':
              $nilai = 0;
              $ips = $ips + $nilai;
              break;
          }
          $sks = $sks + $tampil_semua['sks'];
        } $nilai_akhir = $nilai_akhir + $ips;
          $ips = $ips / 5 ; ?>
       </tbody>
     </table>

     <p>IPS   : <?= $ips ?></p>
     <p>SKS   : <?= $sks ?></p>
     <p>NILAI : <?= $nilai_akhir ?></p>

  </body>
</html>
