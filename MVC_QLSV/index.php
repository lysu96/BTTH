<?php 
require_once 'Confing/confing.php';
Data_sv::Connect();
if (isset($_GET['controllers'])) {
	$controllers = $_GET['controllers'];
}
else
{
	$controllers = NULL;
}
switch ($controllers) {
	case 'sinh_vien':
		require_once 'Controllers/controller.php';
		break;
	
	default:
		echo "controllers không tồn tại";
		break;
}

 ?>