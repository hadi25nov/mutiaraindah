<?php
error_reporting(0);
$sesi_username= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2' ) {
	
	$p_tombol		= isset($_POST['kirim_daftar']) ? $_POST['kirim_daftar'] : "";
	$topic			= isset($_POST['topic']) ? $_POST['topic'] : "";
	$shortdes		= isset($_POST['shortdes']) ? $_POST['shortdes'] : "";
	$longdes		= isset($_POST['longdes']) ? $_POST['longdes'] : "";
	$status			= isset($_POST['status']) ? $_POST['status'] : "";
	
	
	$p_submit		= "Simpan";
	if ($p_tombol == "Simpan") { 
		if ($topic == null ) {
		
		$notif= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-times'></i> MAAF! </strong> Form Isian Masih Belum lengkap mohon di lengkapi<br/></div>";
		
	} else {
		$ekstensi_gbr_diperbolehkan	= array('jpg','png','pdf');
			$gbr = $_FILES['gbr']['name'];
			$x_gbr = explode('.', $gbr);
			$ekstensi_gbr = strtolower(end($x_gbr));
			$ukuran_gbr	= $_FILES['gbr']['size'];
			$file_tmp_gbr = $_FILES['gbr']['tmp_name'];
 
			if(in_array($ekstensi_gbr, $ekstensi_gbr_diperbolehkan) === true ){
				if($ukuran_gbr < 102400000000){			
					move_uploaded_file($file_tmp_gbr, '../form/img/'.$gbr);
					$query = mysqli_query($con,"INSERT INTO tbl_content (id,handle_id,short_content, long_content, gambar, status,created) VALUES('', '$topic','$shortdes','$longdes','$gbr','$status',now())");
					if($query){
						$notif= "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i></strong> Form Isian Berhasil di Simpan<br/></div>";
					}else{
						$notif= "<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i></strong> Form Gagal Upload File<br/></div>";
					}
				}else{
					$notif= "<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i></strong> Ukuran File Terlalu Besar<br/></div>";
				}
			}else{
				$notif= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong><i class='ace-icon fa fa-check'></i></strong> Extensi Form Yang di Upload tidak di Ijinkan<br/></div>";
			}
			
			
		
		
	}
	}
?>
<div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
			<form action="" method="post" enctype="multipart/form-data">
			<?php echo $notif;?>
            <div class="card-header">
              <h3 class="card-title">
                Content Handle
                <small>Insert Your Mind</small>
              </h3>
              <!-- tools box -->
			  
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
			  <div class="form-group">
                  <label>Topic</label>
                  <select name="topic" class="form-control select2" style="width: 100%;">
				  <option></option>
				    <?php 
					$q = mysqli_query($con,"select * from tbl_handle"); 
						while ($a = mysqli_fetch_array($q)){
						if ($a[1] ==$SiteName) {
							echo "<option value='$a[0]' selected>$a[1]</option>";
						} else {
						echo "<option value='$a[0]'>$a[1]</option>";
						}
							} 
					?>
                  </select>
              </div>
			  <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" class="form-control" name="shortdes" placeholder="Short Description ...">
              </div>
              <div class="mb-3">
				<label>Long Description</label>
                <textarea class="textarea" placeholder="Place some text here" name="longdes"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
			  <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="email" class="form-control" name="gbr" data-parsley-trigger="change"  />
                      </div>
                    </div>
              </div>
			  <div class="form-group">
						<label for="custom-control custom-radio">Status</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="status">
                          <label for="customRadio1" class="custom-control-label">Non Aktif</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="status" checked>
                          <label for="customRadio2" class="custom-control-label">Aktif</label>
                        </div>
                      </div>
              <p class="text-sm mb-0">
				<input class="btn btn-info " id="" type="submit" name="kirim_daftar" value="<?php echo $p_submit; ?>">
              </p>
            </div>
          </div>
		  </form>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
<?php
}else{
	session_destroy();
	header('Location:login?status=Silahkan Login');
	
}
 ?>	  