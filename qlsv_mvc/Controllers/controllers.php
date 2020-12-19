<?php 
require_once 'Model/sinhvien.php';
require_once 'Model/lop.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else
{
	$action = NULL;
}
switch ($action) {
	case 'list':
		$db = new Sinhvien();
		$db->Connect();
		$ds = $db->List();
		require_once 'View/list.php';
		break;
	case 'add':
		$db = new Lop();
		$db->Connect();
		$ds = $db->List();
		if (isset($_POST['Add'])) {
			$ma_sv = $_POST['txtma_sv'];
			$ten_sv = $_POST['txtten_sv'];
			$ma_lop = $_POST['txtma_lop'];
			$ns = $_POST['txtns'];
			
			$namsinh = date("Y/m/d",strtotime($ns));
			$db = new Sinhvien();
			$db->Connect();
			//echo $namsinh;
			if ($db->Add($ma_sv,$ten_sv,$ma_lop,$namsinh)) {
				$th = "Thêm thành công .!";
			}
		}
		require_once 'View/add.php';
		break;
	case 'edit':
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$db = new Sinhvien();
			$db->Connect();
			$ds = $db->List_id($id);

			$db = new Lop();
			$db->Connect();
			$dsl = $db->List();

			if (isset($_POST['Edit'])) {
				$ma_sv = $_POST['txtma_sv'];
				$ten_sv = $_POST['txtten_sv'];
				$ma_lop = $_POST['txtma_lop'];
				$ns = $_POST['txtns'];

				$namsinh = date("Y/m/d",strtotime($ns));

				// echo $id."</br>";
				// echo $ma_sv."</br>";
				// echo $ten_sv."</br>";
				// echo $ma_lop."</br>";
				// echo $namsinh;

				$db = new Sinhvien();
				$db->Connect();
			//echo $namsinh;
				if ($db->Edit($id,$ma_sv,$ten_sv,$ma_lop,$namsinh)) {
					$th = "Sửa thành công .!";
				}
			}

		}
		require_once 'View/edit.php';
		break;
	case 'delete':
		$db = new Sinhvien();
		$db->Connect();
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			if ($db->Delete($id)) {
				header("location:index.php?Controller=Sinhvien&action=list");
			}
		}
		break;
	default:
		# code...
		break;
}
 ?>