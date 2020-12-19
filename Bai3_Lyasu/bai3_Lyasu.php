<?php 
if (isset($_POST['KT'])) {
		$textKT = $_POST['textKT'];
		if ($textKT <= 0) {
			echo "<span id=\"loi\">Số file upload phải lớn hơn 0</span>";
		}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload- bai tap 1</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		#tc{
			color: green;
		}
		#loi{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="#" method="POST" enctype="multipart/form-data">
			<input type="text" name="textKT">
			<input type="submit" name="KT" value="Khởi tạo">
		<?php 
			if (isset($textKT))
			for ($i=1; $i<=$textKT; $i++) { 
			?>
			<br/>
			<input type="file" name="Anh[]" multiple>
		<?php } ?>
			<br/>
			<input type="submit" name="Upload" value="Upload file">
		</form>
	</div>
	<?php
		if (isset($_POST['Upload']) && (isset($_FILES['Anh']))) {

			$files = $_FILES['Anh'];

			$names      = $files['name'];
			$types      = $files['type'];
			$tmp_names  = $files['tmp_name'];
			$errors     = $files['error'];
			$sizes      = $files['size'];

			$n = count($names);
			$Thanhcong[] = array();
			for ($i = 0; $i < $n; $i ++) {
				if ($errors[$i] == 0)
				{
					// echo "Bạn upload file thứ $numfiles:<br>";
					// echo "Tên file: $names[$i] <br>";
					// echo "Lưu tại: $tmp_names[$i] <br>";
					// echo "Cỡ file: $sizes[$i] <br><hr>";
					if (move_uploaded_file($tmp_names[$i], 'img/'.$names[$i])) {
						echo "<span id=\"tc\">Uload thành công</span> ".$names[$i]."<br/>";
					}
				}
			}
		}
	?>
</body>
</html>
