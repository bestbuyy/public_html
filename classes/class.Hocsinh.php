<?php
class Hocsinh extends Connection{

	public function laydulieu()
	{
		$sql="select * from hocsinh";
		return $this->query($sql);
	}
	public function deleteHS($data)
	{
		$sql = "DELETE FROM `hocsinh` WHERE mahocsinh = $data";
		return $this->query($sql);
	}
	
}
?>