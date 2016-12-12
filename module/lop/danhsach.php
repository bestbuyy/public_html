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
	<td><span class="glyphicon glyphicon-remove">Xóa</span><span class="glyphicon glyphicon-edit">Sửa</span></td>
	
	

	
	</tr>
	<?php } ?>
	

</table>
</div>
