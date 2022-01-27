<?php
error_reporting(0);
$sesi_username= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2' ) {
	
	$p_del		= isset($_POST['del']) ? $_POST['del'] : "";
	$p_aktif	= isset($_POST['aktif']) ? $_POST['aktif'] : "";
	$p_nonaktif	= isset($_POST['nonaktif']) ? $_POST['nonaktif'] : "";
	
	if(isset($_POST['hapus1'])) {
	$q_daftar1	= mysqli_query($con,"delete from tbl_content where id='$p_del'");
	if($q_daftar1 > 0){echo"<div class='alert alert-danger'>Data berhasil dihapus</div>";}
}
	if(isset($_POST['aktif1'])) {
	$q_daftar1	= mysqli_query($con,"update tbl_content set status='on' where id='$p_aktif'");
	if($q_daftar1 > 0){echo"<div class='alert alert-success'>Data berhasil di edit</div>";}
}
	if(isset($_POST['nonaktif1'])) {
	$q_daftar1	= mysqli_query($con,"update tbl_content set status='off' where id='$p_nonaktif'");
	if($q_daftar1 > 0){echo"<div class='alert alert-success'>Data berhasil di edit</div>";}
} 
?>
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Topic</th>
                  <th>Short Description</th>
                  <th>Picture</th>
                  <th>Status</th>
				  <th>Option</th>
                </tr>
                </thead>
                <tbody>
				<?php 
				$no=0;
				$q = mysqli_query($con,"SELECT a.id as id_a, a.short_content, a.gambar, a.status, b.id as id_b, b.page FROM tbl_content a JOIN tbl_handle b ON a.handle_id = b.id"); 
						while ($a = mysqli_fetch_array($q)){
							$no++;
						  ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $a['page'];?></td>
                  <td><?php echo $a['short_content'];?></td>
                  <td><embed width="100%" height="100%" alt="<?php echo $a['gambar'];?>"src="../form/img/<?php echo $a['gambar'];?>"></embed></td>
                  <td><?php echo $a['status'];?></td>
				  <td>
				  <?php if($a['status']=='off'){
					  echo "<a style='cursor:pointer;' data-toggle='modal'  title='aktif' data-target='#aktif".$a[id_a]."'><i class='fa fa-unlock' style='color:blue;'></i></a>";
				  }else if($a['status']=='on'){
					  echo "<a style='cursor:pointer;' data-toggle='modal'  title='nonaktif'data-target='#nonaktif".$a['id_a']."'><i class='fa fa-lock' style='color:orange;'></i></a>";
				  }?>
				  
				  
				  <a style="cursor:pointer;" data-toggle="modal"  data-target="#delete<?php echo $a['id_a']; ?>">
							<i class="fa fa-trash" style="color:red;"></i>
				 </a>
				  </td>
                </tr>
				<!--aktif-->
                    <div class="modal fade" id="aktif<?php echo $a['id_a']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktifModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
							<form class="form-horizontal" action="" method="post"  role="form">
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header" style="background-color:#03b6fc;color:#ffffff;">
                            <button type="button" style="background-color:#03b6fc;color:#ffffff;" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>You will activate the content ?
                            <input type="hidden" class="form-group" name="aktif" value="<?php echo $a['id_a'];?>">
							</div>
                            <div class="modal-footer">
                            <input class="btn btn-danger btn-sm" type="submit" name="aktif1" target="_self" value="Hapus">
                            <button class="btn btn-info btn-sm" type="button" data-dismiss="modal">Cancel</button>

                            </div>
                            </div>
							</form>

                    </div>
                    </div>
				<!--nonaktif-->
                    <div class="modal fade" id="nonaktif<?php echo $a['id_a']; ?>" tabindex="-1" role="dialog" aria-labelledby="aktifModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
							<form class="form-horizontal" action="" method="post"  role="form">
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header" style="background-color:#03b6fc;color:#ffffff;">
                            <button type="button" style="background-color:#03b6fc;color:#ffffff;" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>You will nonactivate the content ?
                            <input type="hidden" class="form-group" name="nonaktif" value="<?php echo $a['id_a'];?>">
							</div>
                            <div class="modal-footer">
                            <input class="btn btn-danger btn-sm" type="submit" name="nonaktif1" target="_self" value="Hapus">
                            <button class="btn btn-info btn-sm" type="button" data-dismiss="modal">Cancel</button>

                            </div>
                            </div>
							</form>

                    </div>
                    </div>
				<!--delete-->
                    <div class="modal fade" id="delete<?php echo $a['id_a']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
							<form class="form-horizontal" action="" method="post"  role="form">
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header" style="background-color:#03b6fc;color:#ffffff;">
                            <button type="button" style="background-color:#03b6fc;color:#ffffff;" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Konfirmasi</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure delete this content ?
                            <input type="hidden" class="form-group" name="del" value="<?php echo $a['id_a'];?>">
							</div>
                            <div class="modal-footer">
                            <input class="btn btn-danger btn-sm" type="submit" name="hapus1" target="_self" value="Hapus">
                            <button class="btn btn-info btn-sm" type="button" data-dismiss="modal">Cancel</button>

                            </div>
                            </div>
							</form>

                    </div>
                    </div>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Topic</th>
                  <th>Short Description</th>
                  <th>Picture</th>
                  <th>Status</th>
				  <th>Option</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
	  
<?php
}else{
	session_destroy();
	header('Location:login?status=Silahkan Login');
	
}
 ?>	  