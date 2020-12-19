<?php
require_once 'Confing/confing.php';
if (isset($_GET['Controller'])) {

	$Controller = $_GET['Controller'];
}
else
{
	$Controller = NULL;
}
switch ($Controller){
	case 'Sinhvien':
		require_once 'Controllers/controllers.php';
		break;
	
	default:
		echo "Controller khong ton tai";
		break;
}

 ?>