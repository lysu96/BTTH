<?php 
$mang = array(6,5,1,9,8);
sort($mang);
$tang = count($mang);
echo "Sắp xếp theo thứ tự tăng dần <br/>";
for($i = 0; $i < $tang; $i++) {
    echo $mang[$i];
    echo "<br>";
}

echo "Sắp xếp theo thứ tự giảm dần <br/>";
rsort($mang);
$giam = count($mang);
for($j = 0; $j < $giam; $j++) {
    echo $mang[$j];
    echo "<br>";
}
 ?>