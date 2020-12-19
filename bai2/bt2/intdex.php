<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hiện thị thông tin</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div class="cnt">
		<div class="Asu"><h1>Sinh viên: LY A SÚ</h1></div>
		<table border="1px">
			<td>
				<a href="intdex.php?ten=Nguyen-Van-A&&tuoi=33&&ns=Thai-Nguyen">Nguyễn văn A</a><br/>
				<a href="intdex.php?ten=Tran-Van-B&&tuoi=23&&ns=Ha-Noi">Trần Văn B</a><br/>
				<a href="intdex.php?ten=Le-Thi-C&&tuoi=19&&ns=Bac-Giang">Lê thị C</a><br/>
				<a href="intdex.php?ten=Hoang-Van-D&&tuoi=47&&ns=Ha-Tinh">Hoàng văn D</a><br/>
				<a href="intdex.php?ten=Ngo-Thi-E&&tuoi=33&&ns=Tuyen-Quang">Ngô thị E</a><br/>
			</td>
			<th>
				<?php 

				$ten= '';
				$t= '';
				$nsong= '';
				if (isset($_GET['ten'])) {
					$ten = $_GET['ten'];
					$t = $_GET['tuoi'];
					$nsong = $_GET['ns'];
				}
				if($ten=='' || $t=='' || $nsong==''){
					echo "Thông tin chi tiết mỗi người";
				}else{

					echo ("Tên: ".$ten."<br/>");
					echo("Tuổi: ".$t."<br/>");
					echo ("Nơi sống: ".$nsong."<br/>");
				}

				?>
			</th>
		</table>
	</div>

</body>
</html>