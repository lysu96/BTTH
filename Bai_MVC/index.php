<?php 
include 'Config/Connect.php';
$db = new Database();
$db -> Connect();

if (isset($_GET['Controllers'])) {
	$controllers = $_GET['Controllers'];
}else{
	$controllers = NULL;
}
switch ($controllers) {
	case 'thanh_vien':
		require_once 'Controllers/Xu_ly.php';
		break;
	
	default:
		//echo "Controllers khong ton tai !";
		require_once 'Controllers/Xu_ly.php';
		break;
}
 ?>