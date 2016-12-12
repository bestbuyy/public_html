<?php
if(isset($_GET['mahocsinh']))
{	$id=$_GET['mahocsinh'];
	$hs = new hocsinh();
	$arr = $hs->deleteHS($id);
	
	?>  
		<script type="text/javascript">
		window.location="index.php?chucnang=1";
		</script>
	<?php 	
}
	
?>