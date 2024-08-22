<?php 

$file = "D:/php/test.pdf";
$file = (__DIR__).'/test_new.txt';
$content ="writing php codes to get a knowledge";
    //storing it into another file
    $fh = fopen($file, 'w');
	fwrite($fh, $content);
	fclose($fh);
// removing the directory of a file

$file_path = (__DIR__);
print($file_path);
?>
