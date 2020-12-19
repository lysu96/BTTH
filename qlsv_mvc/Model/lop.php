<?php 
require_once 'Confing/confing.php';

/**
 * 
 */
class Lop extends Database
{
	private $tbl = "tbl_lop";
	
	function __construct()
	{
		parent:: Connect();
	}

	public function List()
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table";
		return $this->LayDL($sql);
	}
	public function List_id($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE id_lop=$id";
		return $this->LayDL($sql);
	}
	public function Delete($id)
	{
		$table = $this->tbl;
		$sql = "DELETE FROM $table WHERE id_lop=$id";
		return $this->Thucthi($sql);
	}
}


 ?>