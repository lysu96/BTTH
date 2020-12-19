<?php 
//C:\xampp\mysql\bin>mysql.exe -h localhost -u root
// $config = exec('ping www.youtube.com');
// echo '<pre>';
// echo($config);
// echo '</pre>';

//shell_exec('start /B "C:\Path\to\program.exe"');

// $ping = shell_exec('ping www.youtube.com');
// echo '<pre>';
// echo($ping);
// echo '</pre>';

$lik = shell_exec('start cd C:\xampp\mysql\bin');

// $lik = shell_exec('start cd mysql.exe -h localhost -u root');
echo '<pre>';
echo($lik);
echo '</pre>';

?>