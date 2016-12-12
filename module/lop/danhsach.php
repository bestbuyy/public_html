<div><table class="table table-bordered table-hover">
	<tr>

	<th>Lớp</th>

	<th>Khối</th>
	<th>Tác vụ</th>
	
	</tr>
	<?php $lop= new lop();
	$data= $lop->laydulieu();
	foreach ($data as $key => $value) {
		
	
	 ?>
	<tr>
	<td><?php echo $value['malop']; ?></td>
	<td><?php echo $value['khoi']; ?></td>
<<<<<<< HEAD
	<td><span class="glyphicon glyphicon-remove">Xóa</span><span class="glyphicon glyphicon-edit">Sửa</span></td>
=======
	<td><span class="glyphicon glyphicon-remove"><form action="index.php?chucnang=xoalop&malop=<?php echo $value['malop'];?>" name="form1" METHOD="POST">
                            <button type="submit" name="xoa" class="btn btn-block btn-danger">Xóa</button></form></span><span class="glyphicon glyphicon-edit">Sửa</span></td>
>>>>>>> cuong
	
	

	
	</tr>
	<?php } ?>
	

</table>
</div>
