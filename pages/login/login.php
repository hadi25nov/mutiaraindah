<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>MIA | Mutiara Indah Anugrah</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="icon" href="../../dist/img/mia/mia.ico" >
	<!-- bootstrap & fontawesome -->
	
	
	<link rel="stylesheet" href="../../aset/bootstrap/dist/css/bootstrap.min.css">
<script rel src="../../aset/jquery-3.3.1.min.js"></script>
<script rel src="../../aset/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../aset/font-awesome/css/font-awesome.min.css">
	
	<meta name="description" content="User login page" />
	
	<!-- bootstrap & fontawesome -->
	 	
	
		

	<!-- ace styles -->
	<link rel="stylesheet" href="../../assets/css/ace.min.css" />
	<style>

  .frm{
	 background-color:#ffffff;
	 opacity:0.8;
  }
  .frm:hover{
	  background-color:#D3D3D3;
	  .btn-primary;
	  
	   
  }
  .ipt:hover{
	  	  background-color:#000000;
  }
  .butn{
	    background-color:#ffffff;
		border:1px solid #90EE90;
		cursor:pointer;
		height:50px;
		font-family:arial;
		font-size:20px;
		  
  }
  .butn:hover{
	    color:#ffffff;
	    background-color:#ff1493;
		border:1px solid #90EE90;
		cursor:pointer;
		height:50px;
		font-family:arial;
		font-size:20px;
		font-weight: bold;
		  
  }

</style>
</head>
<body class="" OnLoad="document.login.username.focus();" style="background-color:#ffffff;">
<div class="col-sm-10 col-xs-10 col-10" style="margin-top:10%;margin-left: 15%;">




<div class="container" >





<div class="space-8"></div>
				<form name="form" id="login" method="post" action="" class="form-horizontal">
				
					<div id="loading" class="col-lg-10"style="text-align: center"></div>
					<div class="row" >
					
					<div class="col-sm-4" style="background-color:#ffffff;opacity:0.8;" >
					<div class="space-8"></div>
					<div class="space-8"></div>
					<div class="space-8"></div>
					<span class="block pull-right">
						<img src="../../dist/img/mia/logo.png" class=" col-sm-12 col-12 col-xs-12" style="width:100%;  float:right;">
						<label class="col-sm-12 col-12 col-xs-12 " for="atasan"><h3  style="font-family:arial; float:left;">Dashboard Handling</h3></label>					
					</span>
					
					</div>
					<div class="col-sm-6 frm"  >
					<div class="space-8"></div>
					
					<div class="space-8"></div>
					
						<div class="form-group">
						<div class="col-sm-12">
														<span class="block input-icon input-icon-right">
															<input type="text"  name="username" style="text-align:center;font-size:18px; color:blue;"id="username" value="" class="col-lg-12 col-12 col-xs-12 "  placeholder="Username" />
															<i style="color:blue;" class="ace-icon fa fa-user"></i>
														</span>
						</div>
						</div>
						
						<div class="form-group">
						<div class="col-sm-12">
														<span class="block input-icon input-icon-right">
															<input type="password" name="passlogin" style="text-align:center;font-size:18px; color:blue;" value="" id="passlogin" class="col-lg-12 col-12 col-xs-12 " placeholder="Password" />
															<i style="color:blue;" class="ace-icon fa fa-lock"></i>
														</span>
						</div>
						</div>
						
						<div class="space"></div>

						
							
						<div class="form-group">		
						<div class="col-sm-12">						
							<button class="col-lg-12 butn" ><i  class="fa-icon fa fa-key bigger-110"></i> Login</button>

							</div>
							</div>
							<div class="space-8"></div>
					</div>
					</div>
					
					

						
				
					<div class="space"></div>
					
				</form>
				
								
						
				
							
	</div>		
				
</div>

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="../../assets/js/jquery.2.1.1.min.js"></script>
<script src="../../aset/js/bootstrap.min.js"></script>
<script src="../../assets/js/jquery.validate.min.js"></script>


<!-- <![endif]-->
<?php include "../../config/fungsi_login.php" ?>

</body>
</html>