<?php
class Hocsinh extends Connection{
<<<<<<< HEAD
<<<<<<< HEAD
	public function them($data)
	{
		$sql="INSERT INTO `hocsinh` (`tenhocsinh`, `ngaysinh`,`lop`) VALUES (:tenhocsinh, :ngaysinh,:malop)";
		return $this->query($sql,$data);
	}
=======
>>>>>>> huy
	
=======

>>>>>>> cuong
	public function laydulieu()
	{
		$sql="select * from hocsinh";
		return $this->query($sql);
	}
<<<<<<< HEAD
<<<<<<< HEAD
=======
	public function sua($data)
	{
		$sql="update hocsinh set tenhocsinh = :tenhocsinh, ngaysinh = :ngaysinh, lop=:malop where mahocsinh=:mahocsinh";
		return $this->query($sql,$data);
		
	}
>>>>>>> huy
=======
	public function deleteHS($data)
	{
		$sql = "DELETE FROM `hocsinh` WHERE mahocsinh = $data";
		return $this->query($sql);
	}
	
>>>>>>> cuong
}
?>