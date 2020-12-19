<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai 3 - tim kiem dia chi website</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		#lua_chon{
			color: red;
		}
		#tt{
			color: #1a75ff;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<select name="danhsach">
				<option value="">Chon list website</option>
				<option value="Web_Education">Web Education</option>
				<option value="Web_Fool">Web Fool</option>
				<option value="Web_Travel">Web Travel</option>
			</select>
			<input type="submit" name="tim" value="Submit">
		</form>
		<p></p>
	</div>
	<?php 
		if (isset($_POST['tim'])) {
			$nut = $_POST['tim'];
			$ds = $_POST['danhsach'];

			if (!$ds) {
				echo "<span id=\"lua_chon\">Bạn lựa chon website theo chủ đề</span>";
			}else{
				if($ds == "Web_Education"){
					echo "<span id=\"tt\">Web Education</span><br/>";
					echo "http://ww.a.com <br/>";
					echo "http://ww.b.com <br/>";
					echo "http://ww.c.com <br/>";
				} else if ($ds == "Web_Fool") {
					echo "<span id=\"tt\">Web Fool</span><br/>";
					echo "http://ww.g.com <br/>";
					echo "http://ww.h.com <br/>";
					echo "http://ww.k.com <br/>";
				}else{
					echo "<span id=\"tt\">Web Travel</span><br/>";
					echo "http://ww.m.com <br/>";
					echo "http://ww.n.com <br/>";
					echo "http://ww.o.com <br/>";
				}
			}
		}

	 ?>
</body>
</html>