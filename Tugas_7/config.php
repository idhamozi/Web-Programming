<?php

    class Database
    {
      var $dbServer = "localhost";
      var $dbUser = "root";
      var $dbPass = "";
      var $dbName = "akademik";

      function __construct()
      {
        $this->connect = mysqli_connect($this->dbServer, $this->dbUser, $this->dbPass, $this->dbName);
      }

      function show()
      {
        $query = mysqli_query($this->connect, "SELECT * FROM mahasiswa WHERE npm = '17081010044'");
        while ($data = mysqli_fetch_array($query))
        {
          $result[] = $data;
        }
        return $result;
      }

      function show_all()
      {
        $query = mysqli_query($this->connect, "SELECT mahasiswa.npm, mahasiswa.nama, mahasiswa.prodi, mata_kuliah.nama_mk, mata_kuliah.sks, nilai.nilai FROM mahasiswa, mata_kuliah, nilai WHERE mahasiswa.npm=nilai.npm AND mata_kuliah.kode_mk=nilai.kode_mk AND mahasiswa.npm='17081010044'");
        while ($data = mysqli_fetch_array($query))
        {
          $result[] = $data;
        }
        return $result;
      }
    }


 ?>
