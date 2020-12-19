<?php 
/**
 * 
 */
require_once 'Confing/confing.php';
class Lop extends Data_sv
{
	public function ADD($texttenlop,$textmalop)
	{
		$sql = "INSERT INTO tbl_lop(id_lop, ten_lop, ma_lop) VALUES (NULL,'$texttenlop','$textmalop')";
		return parent::Execute($sql);
	}

}
 ?>