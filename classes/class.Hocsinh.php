<?php
class Hocsinh extends Connection{
	
	public function laydulieu()
	{
		$sql="select * from hocsinh";
		return $this->query($sql);
	}
	public function sua($data)
	{
		$sql="update hocsinh set tenhocsinh = :tenhocsinh, ngaysinh = :ngaysinh, lop=:malop where mahocsinh=:mahocsinh";
		return $this->query($sql,$data);
		
	}
}
?>