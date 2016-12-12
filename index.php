<?php 
include "includes/config.php";
include "libs/function.php" ;
spl_autoload_register('loadclass');
 ?>

<!DOCTYPE>
<html>
<head>
<meta charset="utf-8" />
<title> Website</title>
<link rel="stylesheet" href="js/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>

</head>

<body>

<header>
<!-- menu -->
<section class="menu">
Danh sách menu
</section>
<!-- end-menu -->
</header>
<!--content-->
<section class="content">

<form action="" method="get" accept-charset="utf-8">
<div class="col-xs-3">Chọn chức năng</div>
<div class="col-xs-9"><select name="chucnang">
	<option value="1">Danh sách học sinh</option>
	<option value="2">Thêm học sinh</option>
	<option value="3">Danh sách lớp</option>
	<option value="4">Thêm lớp</option>
	
</select></div>
<div class="col-xs-3 "><button type="submit" >Chọn</button></div>
	
</form>
<?php
$mod= getIndex('chucnang');
if($mod)
{
	if($mod=="1")
	{
		include"module/hocsinh/danhsach.php";
	}
	else if($mod=="2")
	{
		include"module/hocsinh/them.php";
	}
	else if($mod=="3")
	{
		include"module/lop/danhsach.php";
	}
	else if($mod=="4")
	{
		include"module/lop/them.php";
	}


	
}

 ?>

</section> 
<!--end content-->
 <!--login box -->
      
      <!-- end login box-->
<footer class="ewm-footer" data-waypoint-active="yes">
          
        </footer> <!-- /.ewm-footer -->

</body>
 
</html>