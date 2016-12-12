<div><table class="table table-bordered table-hover">
	<tr>
	<th>Mã học sinh</th>
	<th>Tên học sinh</th>
	<th>Ngày sinh</th>
	<th>Lớp</th>
	<th>Tác vụ</th>
	
	</tr>
	<?php $hs= new Hocsinh();
	$data= $hs->laydulieu();
	foreach ($data as $key => $value) {
		
	
	 ?>
	<tr>
	<td><?php echo $value['mahocsinh']; ?></td>
	<td><?php echo $value['tenhocsinh']; ?></td>
	<td><?php echo $value['ngaysinh']; ?></td>
	<td><?php echo $value['lop']; ?></td>
<<<<<<< HEAD
	<td><span class="glyphicon glyphicon-remove">Xóa</span><span class="glyphicon glyphicon-edit">Sửa</span></td>
=======
	<td><span class="glyphicon glyphicon-remove">Xóa</span><a href="index.php?chucnang=6&id=<?php echo $value['mahocsinh'] ?>" class="glyphicon glyphicon-edit">Sửa</a></td>
>>>>>>> huy

	
	</tr>
	<?php } ?>
	

</table>
</div>
