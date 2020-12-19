<?php 
/**
 * 
 */
require_once 'Confing/confing.php';
class Sinhvien extends Data_sv
{
	// public static $tbl_table = "tbl_sv";
	public function ADD($textmasv,$texttensv,$textmalop,$textgioitinh,$namsinh)
	{
		// $table = self::$tbl_table;
		$sql = "INSERT INTO tbl_sv(id_sinhvien, ma_sinhvien, ten_sinhvien, ma_lop, gioi_tinh, nam_sinh) VALUES (NULL,'$textmasv','$texttensv','$textmalop','$textgioitinh','$namsinh')";
		return parent::Execute($sql);
	}
	public function Edit($id,$textmasv,$texttensv,$textmalop,$textgioitinh,$namsinh)
	{
		$sql = "UPDATE tbl_sv SET ma_sinhvien='$textmasv', ten_sinhvien='$texttensv', ma_lop='$textmalop', gioi_tinh= '$textgioitinh', nam_sinh='$namsinh' WHERE id_sinhvien=$id";
		return parent::Execute($sql);
	}
	public function Delete($id)
	{
		$sql = "DELETE FROM tbl_sv WHERE tbl_sv.id_sinhvien = $id";
		return parent::Execute($sql);
	}
	public function List($sql)
	{
		return parent::Lay_DL_Id($sql);
	}
}

 ?>