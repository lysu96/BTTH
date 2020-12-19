 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Bai 1 SQL</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<div class="container">
 		<form action="#" method="POST">
 			<table border="1px" align="center">
 				<tr>
 					<td>STT</td>
 					<td>Name</td>
 					<td>Full</td>
 					<td>Password</td>
 					<td>Chức năm</td>
 				</tr>
 				<?php while ($datas = mysqli_fetch_assoc($query)):
 					?>
 					<tr>
 						<td><?php echo $stt; ?></td>
 						<td><?php echo $datas['name'];
 						?></td>
 						<td><?php echo $datas['full'];
 						?></td>
 						<td><?php echo $datas['password'];
 						?></td>
 						<td>
 							<a href="index.php?action=Edit?id=<?php echo $datas['id']; ?>">Edit</a>
 							<a href="#">Delete</a>
 						</td>
 					</tr>
 				<?php $stt++; endwhile;
 				?>
 			</table>
 		</form>
 	</div>
 </body>
 </html>