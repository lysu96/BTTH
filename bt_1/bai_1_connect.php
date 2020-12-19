<?php 
$host = "localhost";
$user = "root";
$pass = "";
$data = "bt_csdl";

$con = mysqli_connect($host,$user,$pass,$data);

if ($con) {
	mysqli_set_charset($con, 'utf8');
	//echo "thanh cong";
}else{
	echo "ket noi that bai".mysqli_connect_error();
}


	$sql = "SELECT * FROM tbl_bai1_csdl";
	$query = mysqli_query($con,$sql);
?>