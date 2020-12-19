<?php 
require_once 'Model/lop.php';
require_once 'Model/sinhvien.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else
{
	$action = NULL;
}
switch ($action) {
	case 'Add_sv':
		if (isset($_POST['them'])) {

			if (empty($_POST['textmasv'])) {
					$loimasv = "* Không được để trống mã sinh viên ";
					$textmasv="";
				}else{
					$textmasv = $_POST['textmasv'];
				}
				//
				if (empty($_POST['texttensv'])) {
					$loitensv = "* Không được để trống tên sinh viên ";
					$texttensv="";
				}else{
					$texttensv = $_POST['texttensv'];
				}
				//
				if (empty($_POST['textmalop'])) {
					$loimalop = "* Không được để trống mã lớp ";
					$textmalop="";
				}else{
					$textmalop = $_POST['textmalop'];
				}
				//
				if (empty($_POST['textgioitinh'])) {
					$loigioitinh = "* Không được để trống giới tính ";
					$textgioitinh="";
				}else{
					$textgioitinh = $_POST['textgioitinh'];
				}
				//
				if (empty($_POST['textnamsinh'])) {
					$loinamsinh = "* Không được để trống năm sinh ";
					$textnamsinh="";
				}else{
					$textnamsinh = $_POST['textnamsinh'];
				}
				$namsinh = date("Y-m-d", strtotime($textnamsinh));
			// echo $textmasv."<br/>";
			// echo $texttensv."<br/>";
			// echo $textmalop."<br/>";
			// echo $textgioitinh."<br/>";
			// echo $namsinh;

			if (Sinhvien::ADD($textmasv,$texttensv,$textmalop,$textgioitinh,$namsinh)) {
				$thanhcong = "Thêm thành công";
			}else{
				$thanhcong = " ";
			}
		}
		require_once 'View/Add_sv.php';
		break;
	case 'Edit_sv':
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_sv WHERE id_sinhvien=$id";
			$gia_tri_sua = Sinhvien::List($sql);

			if (isset($_POST['them'])) {

				$textmasv = $_POST['textmasv'];
				$texttensv = $_POST['texttensv'];
				$textmalop = $_POST['textmalop'];
				$textgioitinh = $_POST['textgioitinh'];
				$textnamsinh = $_POST['textnamsinh'];
				$namsinh = date("Y-m-d", strtotime($textnamsinh));

			// echo $textmasv."<br/>";
			// echo $texttensv."<br/>";
			// echo $textmalop."<br/>";
			// echo $textgioitinh."<br/>";
			// echo $namsinh;

				if (Sinhvien::Edit($id,$textmasv,$texttensv,$textmalop,$textgioitinh,$namsinh)) {
					header("location:index.php?controllers=sinh_vien&action=List_sv");
				}
			}
		}
		require_once 'View/Edit_sv.php';
		break;
	case 'List_sv':
		$sql = "SELECT * FROM tbl_sv, tbl_lop WHERE tbl_sv.ma_lop = tbl_lop.ma_lop";
		$datalist = Sinhvien::List($sql);
		require_once 'View/List_sv.php';
		break;
	case 'Delete_sv':
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			
			if (Sinhvien::Delete($id)) {
				header("location:index.php?controllers=sinh_vien&action=List_sv");
			}
		}
		break;
	case 'Add_lop':
		if (isset($_POST['themlop'])) {
			if (empty($_POST['texttenlop'])) {
				$loilop = "* Không được để trống tên lớp";
				$texttenlop	= NULL;
			}else{
				$texttenlop = $_POST['texttenlop'];
			}
			if (empty($_POST['textmalop'])) {
				$loilop = "* Không được để trống mã lớp";
				$textmalop = NULL;
			}else{
				$textmalop = $_POST['textmalop'];
			}
		
			if (Lop::ADD($texttenlop,$textmalop)) {
				$thanhcong = "Thêm lớp thành công";
			}
		}
		require_once 'View/Add_lop.php';
		break;
	default:
		echo "Trang không tồn tại";
		break;
}


 ?>