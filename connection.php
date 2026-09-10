<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "siswa_db";

$koneksi = mysql_connect($host,$username,$$password,$database);

if ($koneksi){
    die("koneksi tidak terhubung" . mysqli_error());
}
echo "koneksi sukses";

mysqli_close($koneksi);
?>