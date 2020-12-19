<?php 
/**
 * 
 */
class Database
{
	
	private $host = "localhost";
	private $name = "root";
	private $pass = "";
	private $data = "ql_sinhvien";

	protected $conn = NULL;

	public function Connect()
	{
		$this->conn = mysqli_connect($this->host,$this->name,$this->pass,$this->data);
		if (!$this->conn) {
			echo "loi ket noi !";
		}
		else
		{
			mysqli_set_charset($this->conn,'utf8');
			//echo "ket noi thanh cong";
		}
		return $this->conn;
	}

	public function Thucthi($sql)
	{
		$reautl = $this->conn->query($sql);
		return $reautl;
	}

	public function LayDL($sql)
	{
		$reautl = $this->Thucthi($sql);
		$arr = array();
		if (mysqli_num_rows($reautl)>0) {
			while ($data = mysqli_fetch_array($reautl)) {
				$arr[] = $data;
			}
		}
		else
		{
			echo "loi cau lenh sql";
		}
		return $arr;
	}

}


 ?>