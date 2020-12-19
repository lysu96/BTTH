<?php 
if (isset($_POST['kq'])) {
	$a = $_POST['a'];
	$b = $_POST['b'];
	$pheptinh = $_POST['pheptinh'];
	$kt="";
	
	if($a==""&&$b==""){
		$kt = "các trường nhập số không được để trống";
	} elseif (!is_numeric($a) && !is_numeric($b)) {
		$kt = "các trường nhập vào phải là số ";
	}else{
		switch ($pheptinh) {
		case '+':
		$kqd = $a+$b;
		break;
		case '-':
		$kqd = $a-$b;
		break;
		case '*':
		$kqd = $a*$b;
		break;
		case '/':
		$kqd = $a/$b;
		break;
		default:
		$kqd = $a+$b;
		break;
	}
	}
}
?>