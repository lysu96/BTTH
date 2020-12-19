
<?php

$info = new SplFileInfo('hackimg.php');
var_dump($info->getExtension());

?>


<?php
echo mime_content_type('hackimg.php') . "\n";
//echo mime_content_type('ch2.php');
?>



<?php

echo filetype('/etc/passwd');  // file
echo filetype('/etc/');        // dir

?>



<?php

// outputs e.g.  somefile.txt: 1024 bytes

$filename = 'hackimg.php';
echo $filename . ': ' . filesize($filename) . ' bytes';

?>


<?php
$info = new SplFileInfo('hackimg.php');
var_dump($info->isExecutable()); 

?>


