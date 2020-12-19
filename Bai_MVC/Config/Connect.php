<?php 
/**
 * 
 */
class Database
{
	public $host = 'localhost';
	public $user = 'root';
	public $pass = '';
	public $csdl = 'ql_tv';

	public $con = NULL;
	//public $retull = NULL;
	// ket noi
	public function Connect()
	{
		$this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->csdl);
		if (!$this->con) {
			echo "Lỗi kết nối.!";
		}
		else
		{
			mysqli_set_charset($this->con,'utf8');
		}
		return $this->con;
	}

	// thuc thi

	public function excute($sql)
	{
		$retull = $this->con->query($sql);
		return $retull;
	}

	// lay dl, bang
	public function GetAllData($table)
	{
		$sql = "SELECT * FROM $table";
		$tt = $this->excute($sql);
		$data = array();
		if (mysqli_num_rows($tt) > 0 ) {
			while ($row = mysqli_fetch_assoc($tt)) {
				$data[] = $row;		
			}
		}
		else
		{
			$data = 0;
		}
		return $data;
	}

	// lay id
	public function GetIdData($table,$id)
	{
		$sql = "SELECT * FROM $table WHERE id=$id";
		$tt = $this->excute($sql);
		$data = array();
		if (mysqli_num_rows($tt) != 0 ) {
			$data = mysqli_fetch_assoc($tt);
		}
		else
		{
			$data = 0;
		}
		return $data;
	}

	// them
	public function Add($table,$name,$fullname,$password)
	{
		$sql = "INSERT INTO $table(id, name, fullname, password) VALUES (NULL,'$name','$fullname','$password')";
		return $this->excute($sql);

	}

	// sua
	public function Edit_tv($table,$id,$name,$fullname,$password)
	{
		$sql = "UPDATE $table SET name='$name',fullname='$fullname',password='$password' WHERE id=$id";
		return $this->excute($sql);

	}

	// xoa
	public function Delete_tv($table,$id)
	{
		$sql = "DELETE FROM $table WHERE id=$id";
		return $this->excute($sql);

	}
	// login
	public function Login($table,$name,$password)
	{
		$sql = "SELECT * FROM $table WHERE name='$name' AND password='$password'";
		$tt = $this->excute($sql);
		$data = array();
		if (mysqli_num_rows($tt)) {
			$data = mysqli_fetch_assoc($tt);
		}else{
			$data = 0;
		}
		return $data;
	}

}

 ?>