<?php 
/**
 * 
 */
class Data_sv
{
	private static $hostname = "localhost";
	private static $username = "root";
	private static $password = "";
	private static $database ="quanly_sinhvien";
	protected static $conn = NULL;
	
	public function Connect()
		{
			self::$conn = mysqli_connect(self::$hostname,self::$username,self::$password,self::$database);

			if (!self::$conn) {
				echo "kết nối thất bại";
			}
			else
			{
				mysqli_set_charset(self::$conn,'utf8');
			}
		}
	public function Execute($sql)
		{
			$retuln = self::$conn->query($sql);
			return $retuln;
		}	
	public function Lay_DL_Id($sql)
	{
		$retuln = self::Execute($sql);
		$arr = array();
		if (mysqli_num_rows($retuln)>0) {
			while ($arrs = mysqli_fetch_array($retuln)) {
				$arr[] = $arrs;
			}
		}
		else
		{
			$arr = 0;
		}
		return $arr;
	}

}
 ?>