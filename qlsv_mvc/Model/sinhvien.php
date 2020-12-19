<?php 
require_once 'Confing/confing.php';

/**
 * 
 */
class Sinhvien extends Database
{
	private $tbl = "tbl_sinhvien";
	
	function __construct()
	{
		parent:: Connect();
	}

	public function List()
	{
		$sql = "SELECT * FROM tbl_sinhvien, tbl_lop WHERE tbl_sinhvien.ma_lop=tbl_lop.ma_lop";
		return $this->LayDL($sql);
	}
	public function List_id($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE id_sv=$id";
		return $this->LayDL($sql);
	}
	public function Edit($id,$ma_sv,$ten_sv,$ma_lop,$namsinh)
	{
		$table = $this->tbl;
		$sql = "UPDATE $table SET ma_sv='$ma_sv',ten_sv='$ten_sv',ma_lop='$ma_lop',sn='$namsinh' WHERE id_sv=$id";
		return $this->Thucthi($sql);
	}
	public function Add($ma_sv,$ten_sv,$ma_lop,$namsinh)
	{
		$table = $this->tbl;
		$sql = "INSERT INTO $table(id_sv, ma_sv, ten_sv, ma_lop, sn) VALUES(NULL,'$ma_sv','$ten_sv','$ma_lop','$namsinh')";
		return $this->Thucthi($sql);
	}
	public function Delete($id)
	{
		$table = $this->tbl;
		$sql = "DELETE FROM $table WHERE id_sv=$id";
		return $this->Thucthi($sql);
	}
}


 ?>