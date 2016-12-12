<?php
class Lop extends Connection{
	public function them($data)
	{
		$sql="INSERT INTO `lop` (`malop`, `khoi`) VALUES (:malop, :khoi)";
		return $this->query($sql,$data);
	}
	public function xoa($data)
	{
		$sql="DELETE FROM lop where malop=:malop";
		return $this->query($sql,$data);
	}
	public function laydulieu()
	{
		$sql="select * from lop";
		return $this->query($sql);
	}
	public function sua($data)
	{
		$sql="update lop set  khoi = :khoi where malop = :malop";
		return $this->query($sql,$data);
		
	}
}
?>