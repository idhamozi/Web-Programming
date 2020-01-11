<?php
include('koneksi.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['jenis'])) {
        //query SQL
        $jenis = $_GET['jenis'];
        $kondisi = $_GET['kondisi'];
        $nm_fakultas = $_SESSION['nm_fakultas'];

        if ($jenis == "" && $kondisi == "") {
          $query = "SELECT * FROM data_inv, fakultas WHERE data_inv.kode_fakultas = fakultas.kode_fakultas && nm_fakultas = '$nm_fakultas'";
        } elseif ($jenis == "") {
          $query = "SELECT * FROM data_inv, fakultas WHERE data_inv.kode_fakultas = fakultas.kode_fakultas  &&  kondisi='$kondisi' && nm_fakultas = '$nm_fakultas'";
        } elseif ($kondisi == "") {
          $query = "SELECT * FROM data_inv, fakultas WHERE data_inv.kode_fakultas = fakultas.kode_fakultas  && jenis = '$jenis' && nm_fakultas = '$nm_fakultas'";
        } else {
          $query = "SELECT * FROM data_inv, fakultas WHERE data_inv.kode_fakultas = fakultas.kode_fakultas  && jenis = '$jenis' && kondisi='$kondisi' && nm_fakultas = '$nm_fakultas'";
        }
        //eksekusi query
        $hasil = mysqli_query($koneksi,$query);
          echo "<table border=1 align=center id=data>";
          echo "<tr>";
            echo "<th class='row1'>KODE INVENTARIS</th>";
            echo "<th class='row2'>JENIS</th>";
            echo "<th class='row3'>FAKULTAS</th>";
            echo "<th class='row4'>BARANG</th>";
            echo "<th class='row5'>KONDISI</th>";
          echo "</tr>";

        while ($data = mysqli_fetch_assoc($hasil)):
            echo "<tr>";
              echo "<td>".$data['kode_inv']."</td>";
              echo "<td>".$data['jenis']."</td>";
              echo "<td>".strtoupper($data['nm_fakultas'])."</td>";
              echo "<td>".$data['barang']."</td>";
              echo "<td>".$data['kondisi']."</td>";
            echo "</tr>";
        endwhile;
        echo "</table>";
    }
}
