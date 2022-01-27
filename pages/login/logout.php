<?php  session_start();
if(isset($_SESSION['username']))
{
	session_destroy();
	header('Location:login?status=Anda sudah Keluar');
}else{
	session_destroy();
	header('Location:login?status=Silahkan Login!');
}
?>