<div class="col-xs-12"><form action="" method="post">

	<div class="col-md-7">
		<div class="col-md-2">Lớp:</div>
		<div class="col-md-4"><input type="text" name="malop" value=""></div>
	</div>
	<div class="col-md-7">
		<div class="col-md-2">Khối:</div>
		<div class="col-md-4"><input type="text" name="khoi" value=""></div>
	</div>

	<div class="col-md-7">
		
		<div class="col-md-2 col-md-offset-4"><input class="btn-success form-control" type="submit" name="themlop" value="thêm"/></div>
	</div>

</form>
<?php 
if(isset($_POST) && isset($_POST['themlop']))
{
	$data=array(":malop"=>$_POST['malop'],":khoi"=>$_POST['khoi']);
	$xllop= new Lop();
	$them = $xllop->them($data);
	redirect('index.php');
}
 ?>
</div>