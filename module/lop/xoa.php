<?php
if(isset($_GET['malop']))
{	$id=$_GET['malop'];
	$lop = new lop();
	$arr = $lop->xoa($id);
	
	?>  
		<script type="text/javascript">
		window.location="index.php?chucnang=3";
		</script>
	<?php 	
}
	
?>