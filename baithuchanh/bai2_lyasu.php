<?php 
if (isset($_POST['kq'])) {
	if (empty($_POST['bk'])) {
		$bk = NULL;
	}else{
		$bk = $_POST['bk'];
	}
	$tinh = $_POST['tinh'];
	$pi = 3.14;

	function Tinhdientich($bk,$pi)
	{
		return $pi*pow($bk,2);
		//echo "Kết quả: ".$kq;
	}
	function Tinhchuvi($bk,$pi)
	{
		return 2*$bk*$pi;
		//echo "Kết quả: ".$kq;
	}
	if ($_POST['tinh']=="dt") {
		$ht = Tinhdientich($bk,$pi);
	}else{
		$ht = Tinhchuvi($bk,$pi);
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai2 - tính</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<table align="center">
				<tr>
					<td>Form</td>
				</tr>
				<tr>
					<td>Bán kính: </td>
					<td><input type="text" name="bk" value="<?php if(isset($bk)){ echo $bk; } ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="tinh" value="dt" checked>Tính diện tích
						<input type="radio" name="tinh" value="cv">Tính chu vi
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="kq" value="Tính"></td>
				</tr>
				<tr>
					<td>Kết quả: </td>
					<td><?php if (isset($ht)) {
						echo($ht);
					} ?></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>