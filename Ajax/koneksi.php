<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'inventaris');
if (!$koneksi) {
    die('Could not connect: ' . mysqli_connect_error());
}
?>
