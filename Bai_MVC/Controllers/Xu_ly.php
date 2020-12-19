<?php session_start(); ?>
<?php
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}else{
	$action = NULL;
}
switch ($action) {
	case 'List':
		$tbl_table = 'tbl_thanhvien';
		$user = $db->GetAllData($tbl_table);
		require_once 'Views/List.php';
	break;
	case 'Add':
		$tbl_table = 'tbl_thanhvien';
		if (isset($_POST['them'])) {
			$name = $_POST['textname'];
			$fullname = $_POST['textfullname'];
			$password = $_POST['textpassword'];

			if ($db->Add($tbl_table,$name,$fullname,$password)) {
				$thanhcong = "Thêm tành công";
			}
		}
		require_once 'Views/Add.php';
	break;
	case 'Edit':
		$tbl_table = 'tbl_thanhvien';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$hienthi = $db->GetIdData($tbl_table,$id);

			if (isset($_POST['Sua_tv'])) {
				$edit_name = $_POST['edit_name'];
				$edit_fullname = $_POST['edit_fullname'];
				$edit_password = $_POST['edit_password'];
				
				if($db->Edit_tv($tbl_table,$id,$edit_name,$edit_fullname,$edit_password)){
						header("location:index.php?Controllers=thanh_vien&action=List");
					}
					else
					{
						$thatbai = "Sửa thất bại..!";
						// echo($id);
						// echo($tbl_table);
						// echo($edit_name);
						// echo($edit_fullname);
						// echo($edit_password);
					}
			}
		}
		require_once 'Views/Edit.php';
	break;
	case 'Delete':
		$tbl_table = 'tbl_thanhvien';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			if ($db->Delete_tv($tbl_table,$id)) {
				header("location:index.php?Controllers=thanh_vien&action=List");
			}
		}
		break;
	case 'Login':
		$tbl_table = 'tbl_thanhvien';
		if (isset($_POST['Login'])) {
			$loi = array();
			$username = NULL;
			$password = NULL;
			if (empty($_POST['username'])) {
				$loi['username'] = "* Bạn cần nhập Username";
			}else{
				$username = $_POST['username'];
			}
			if (empty($_POST['password'])) {
				$loi['password'] = "* Bạn cần nhập Password";
			}else{
				$password = $_POST['password'];
			}
			
			$user = $db->Login($tbl_table,$username,$password);
			
			if ($user>0) {
				
				$session_id = $user['id'];
				$row = $db->GetIdData($tbl_table,$session_id);
				include 'Views/Master/sessoin.php';
			}else{
				$dangnhap = "Sai mật tên đăng nhập hoặc mật khẩu.!";
			}
		}
		$titel = 'Trang login';
		require_once 'Views/Master/Header.php';
		require_once 'Views/Login.php';
		break;
	case 'Logout':
		require_once 'Views/Logout.php';
		break;
	default:
		$tbl_table = 'tbl_thanhvien';
		$user = $db->GetAllData($tbl_table);
		require_once 'Views/List_tv.php';
		break;
}
?>