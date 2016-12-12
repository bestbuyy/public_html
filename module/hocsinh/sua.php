<?php 
$hs= new Hocsinh();
$id = $_GET["id"];
$rows=$hs->laydulieu();
foreach($rows as $r)
if($r['mahocsinh']==$id) {
?>
<div class="col-xs-12">
<form action="" method="post">
	<div class="col-md-7">
		<div class="col-md-2">Tên học sinh:</div>
		<div class="col-md-4"><input class="form-control" type="text" name="ten" value="<?php echo $r['tenhocsinh']?>"/></div>
	</div>
	<div class="col-md-7">
		<div class="col-md-2">Ngày sinh :</div>
		<div class="col-md-4"><input class="form-control" type="text" name="ngaysinh" value="<?php echo $r['ngaysinh']?>"/></div>
			</div>

	
	<?php } ?>

	
	<div class="col-md-7">
		<div class="col-md-2">Lớp:</div>
		<div class="col-md-4">

		<SELECT name="malop" class="form-group">
		<?php $xllop= new Lop(); 
		$datalop= $xllop->laydulieu();
		foreach ($datalop as $key => $value) {
		?>
		<option value="<?php echo $value['malop'] ?>"><?php echo $value['malop'] ?></option>
		<?php } ?>
		</SELECT></div>
	</div>
	<div class="col-md-7">
		
		<div class="col-md-2 col-md-offset-4"><input class="btn-success form-control" type="submit" name="gui" value="Sửa"/></div>
	</div>

</form>
<?php 
if(isset($_POST) && isset($_POST['gui']))
{
	$ten= postIndex('ten');
	$ngaysinh= postIndex('ngaysinh');
	$malop= postIndex('malop');

	$data=array(":tenhocsinh"=>$ten,":ngaysinh"=>$ngaysinh,"malop"=>$malop,":mahocsinh"=>$id);
	$hs= new Hocsinh();
	$sua = $hs->sua($data);
	redirect('index.php');
}
 ?>
</div>