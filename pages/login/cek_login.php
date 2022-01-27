
<?php
error_reporting(0);
include "../../config/koneksi.php";
$user = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,md5($_POST['passlogin']));

if ( !ctype_alnum($pass)){
echo "<div id='gagal' class='alert alert-danger'>Maaf anda bukan Administrator</div>";

}


// pastikan username dan password adalah berupa huruf atau angka.



$loginsql=sprintf("SELECT * FROM tbl_user WHERE (username='$user' or email='$user') AND pass='$pass' and kd_approve='1' ", mysqli_real_escape_string ( $con ,  $user ), mysqli_real_escape_string ( $con , $pass ));
$cek_lagi=mysqli_query($con, $loginsql);
$ketemu=mysqli_num_rows($cek_lagi);
$r= mysqli_fetch_array($cek_lagi);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['kode']     = $r['id_user'];
  $_SESSION['nip']     = $r['email'];
  $_SESSION['username']     = $r['username'];
  $_SESSION['passuser']     = $r['pass'];
  $_SESSION['leveluser']    = $r['level_user'];
  $_SESSION['nama']    = $r['f_name'];
  $_SESSION['status']    = $r['status'];
  $_SESSION['w_login']    = $r['w_login'];
  $id_user=$_SESSION['kode'];	
  
  
  
  if($_SESSION['leveluser']==1){
	echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='index?id=profil'</script>";
	mysqli_query($con,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } else if($_SESSION['leveluser']==2){
      echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='index?id=profil'</script>";
	mysqli_query($con,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==3){
        echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='partner.php?id=profil'</script>";
	mysqli_query($con,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==4){
        echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='pm_rm.php?id=profil'</script>";
	mysqli_query($con,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==5){
        echo "<div id='sukses' class='alert alert-info'><strong>Welcome...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='dashboard.php?id=profil'</script>";
	mysqli_query($con,"update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  }
}
else{

  echo "<div id='gagal' class='alert alert-danger'>Mohon maaf username & password anda salah<button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div>";
}

?>
