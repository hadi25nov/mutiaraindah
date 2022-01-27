<?php
// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "db_mia";

// Create connection
$con = new mysqli($server, $username, $password, $database);
// Check connection
if(!$con){
	die(mysqli_connect_error());
}
$val = new Lokovalidasi;
?>
