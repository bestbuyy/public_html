<?php
class Hocsinh extends Connection{
	public function them($data)
	{
		$sql="INSERT INTO `hocsinh` (`tenhocsinh`, `ngaysinh`,`lop`) VALUES (:tenhocsinh, :ngaysinh,:malop)";
		return $this->query($sql,$data);
	}
	public function laydulieu()
	{
		$sql="select * from hocsinh";
		return $this->query($sql);
	}
}
?>