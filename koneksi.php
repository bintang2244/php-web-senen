<?php
$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "royrr";
$port = 8080;

//aktifin mode exception utk mysql
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try { 
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
} catch (mysqli_sql_exception $error) {
     //kl terjadi kesalahan koneksi
     echo "koneksi gagal" . $error->getMessage();
}
?>

