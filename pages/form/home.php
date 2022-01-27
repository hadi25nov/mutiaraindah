<?php
error_reporting(0);
$sesi_username= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2' ) {
?>

<div class="container-fluid">
	  <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h1 class="widget-user-username">Welcome</h3>
                <h5 class="widget-user-desc"><?php echo $nm_usr; ?></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../../dist/img/avatar5.png" alt="User Avatar">
              </div>
              <div class="card-footer">
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
<?php
}else{
	session_destroy();
	header('Location:login?status=Silahkan Login');
	
}
 ?>	  