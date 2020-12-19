<?php 
if (isset($_GET['mouse'])) {
	$mouse = $_GET['mouse'];

	switch ($mouse) {

		case 'add':
			if (isset($_POST['add'])) {
				$error = array();
				if (empty($_POST['maSV'])) {
					$error['maSV'] = "* Bạn cần nhập mã sinh viên";
				} else{
					$maSV = $_POST['maSV'];
				}
				if (empty($_POST['tenSV'])) {
					$error['tenSV'] = "* Bạn cần nhập tên sinh viên";
				} else{
					$tenSV = $_POST['tenSV'];
				}
				if (empty($_POST['namSinh'])) {
					$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
				} else{
					$namSinh = $_POST['namSinh'];
				}
				if (empty($_POST['lop'])) {
					$error['lop'] = "* Bạn cần nhập lớp sinh viên";
				} else{
					$lop = $_POST['lop'];
				}
				if (empty($_FILES['avata'])) {
					$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
				} else{
					$avata = $_FILES["avata"]["name"];
				}
				if (empty($error)) {
					move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

					$themthanhcong[] = NULL;
					if ($db->InsertData($maSV, $tenSV, $namSinh, $lop, $avata)) {
						$themthanhcong[] = 'thanh_cong';
					} else{
						$themthanhcong[] = 'kthanh_cong';
					}
				}
	
			}
			require_once 'View/User/add-user.php';
			break;

		case 'add1':
			if (isset($_POST['add'])) {
				$error = array();
				if (empty($_POST['maSV'])) {
					$error['maSV'] = "* Bạn cần nhập mã sinh viên";
				} else{
					$maSV = $_POST['maSV'];
				}
				if (empty($_POST['tenSV'])) {
					$error['tenSV'] = "* Bạn cần nhập tên sinh viên";
				} else{
					$tenSV = $_POST['tenSV'];
				}
				if (empty($_POST['namSinh'])) {
					$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
				} else{
					$namSinh = $_POST['namSinh'];
				}
				if (empty($_POST['lop'])) {
					$error['lop'] = "* Bạn cần nhập lớp sinh viên";
				} else{
					$lop = $_POST['lop'];
				}
				if (empty($_FILES['avata'])) {
					$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
				} else{
					$avata = $_FILES["avata"]["name"];
				}
				if (empty($error)) {
					$blacklist = array(".php","html","shtml",".phtml", ".php3", ".php4",".php7");
					foreach ($blacklist as $item) {
                    if(preg_match("/$item\$/", $_FILES['avata']['name'])) {
                    if(isset($_FILES['avata'])){echo "Không cho thêm file có đuôi HTML , PHP \n";}
                    exit;
                    }
                    }
                    $uploaddir = 'View/Img/img-Idol/';
                    $uploadfile = $uploaddir . basename($_FILES['avata']['name']);
                    if (move_uploaded_file($_FILES['avata']['tmp_name'], $uploadfile));

					//move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

					$themthanhcong[] = NULL;
					if ($db->InsertData($maSV, $tenSV, $namSinh, $lop, $uploadfile)) {
						$themthanhcong[] = 'thanh_cong';
					} else{
						$themthanhcong[] = 'kthanh_cong';
					}
				}
	
			}
			require_once 'View/User/add-user.php';
			break;

		case 'add2':
			if (isset($_POST['add'])) {
				$error = array();
				if (empty($_POST['maSV'])) {
					$error['maSV'] = "* Bạn cần nhập mã sinh viên";
				} else{
					$maSV = $_POST['maSV'];
				}
				if (empty($_POST['tenSV'])) {
					$error['tenSV'] = "* Bạn cần nhập tên sinh viên";
				} else{
					$tenSV = $_POST['tenSV'];
				}
				if (empty($_POST['namSinh'])) {
					$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
				} else{
					$namSinh = $_POST['namSinh'];
				}
				if (empty($_POST['lop'])) {
					$error['lop'] = "* Bạn cần nhập lớp sinh viên";
				} else{
					$lop = $_POST['lop'];
				}
				if (empty($_FILES['avata'])) {
					$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
				} else{
					$avata = $_FILES["avata"]["name"];
				}
				if (empty($error)) {
					move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

					$themthanhcong[] = NULL;
					if ($db->InsertData($maSV, $tenSV, $namSinh, $lop, $avata)) {
						$themthanhcong[] = 'thanh_cong';
					} else{
						$themthanhcong[] = 'kthanh_cong';
					}
				}
	
			}
			require_once 'View/User/add-user.php';
			break;

		case 'add3':
			if (isset($_POST['add'])) {
				$error = array();
				if (empty($_POST['maSV'])) {
					$error['maSV'] = "* Bạn cần nhập mã sinh viên";
				} else{
					$maSV = $_POST['maSV'];
				}
				if (empty($_POST['tenSV'])) {
					$error['tenSV'] = "* Bạn cần nhập tên sinh viên";
				} else{
					$tenSV = $_POST['tenSV'];
				}
				if (empty($_POST['namSinh'])) {
					$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
				} else{
					$namSinh = $_POST['namSinh'];
				}
				if (empty($_POST['lop'])) {
					$error['lop'] = "* Bạn cần nhập lớp sinh viên";
				} else{
					$lop = $_POST['lop'];
				}
				if (empty($_FILES['avata'])) {
					$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
				} else{
					$avata = $_FILES["avata"]["name"];
				}
				if (empty($error)) {
					move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

					$themthanhcong[] = NULL;
					if ($db->InsertData($maSV, $tenSV, $namSinh, $lop, $avata)) {
						$themthanhcong[] = 'thanh_cong';
					} else{
						$themthanhcong[] = 'kthanh_cong';
					}
				}
	
			}
			require_once 'View/User/add-user.php';
			break;

		case 'edit':
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "tbl_student";
				$hienthi = $db->getEditData($id, $tblTable);

				if (isset($_POST['update'])) {
					$error = array();
					if (empty($_POST['maSV'])) {
						$error['maSV'] = "* Bạn cần nhập mã sinh viên";
					} else{
						$maSV = $_POST['maSV'];
					}
					if (empty($_POST['tenSV'])) {
						$error['tenSV'] = "* Bạn cần nhập tên sinh viên";
					} else{
						$tenSV = $_POST['tenSV'];
					}
					if (empty($_POST['namSinh'])) {
						$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
					} else{
						$namSinh = $_POST['namSinh'];
					}
					if (empty($_POST['lop'])) {
						$error['lop'] = "* Bạn cần nhập lớp sinh viên";
					} else{
						$lop = $_POST['lop'];
					}
					if (empty($_FILES['avata'])) {
						$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
					} else{
						$avata = $_FILES["avata"]["name"];
					}
					if (empty($error)) {
						move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

						$themthanhcong[] = NULL;
						if ($db->Editdata($id, $maSV, $tenSV, $namSinh, $lop, $avata)) {
							$themthanhcong[] = 'thanh_cong';
						} else{
							$themthanhcong[] = 'kthanh_cong';
						}
					}
	
				}
			}
			require_once 'View/User/edit-user.php';
			break;

		case 'list':
			$tblTable = "tbl_student";
			$dataar = $db->getAlldata($tblTable);
			require_once 'View/User/list-user.php';
			break;
		case 'Delete':
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "tbl_student";

				if ($db-> Delete($id, $tblTable)) {
					header('location:index.php?action=user&mouse=list');
				} else{
					header('location:index.php?action=user&mouse=list');
				}
			}
			break;

		case 'img':
			$tblTable = "tbl_student";
			$anh = $db->getAlldata($tblTable);
			require_once 'View/Page/img-idol.php';
			break;
		case 'img1':
			$tblTable = "tbl_student";
			$anh = $db->getAlldata($tblTable);
			require_once 'View/Page/imgadd1.php';
			break;

		case 'me':
			require_once 'View/Page/me.php';
			break;
		case 'listdn':
			$tblTable = "tbl_student";
			$danhSachSV = $db->getAlldata($tblTable);
			require_once 'View/User/list_dn.php';
			break;

		default:
			$tblTable = "tbl_student";
			$danhSachSV = $db->getAlldata($tblTable);
			require_once 'View/Page/home.php';
			break;
	}
}

?>