<?php 

$content ="writing some data input into the file";
$filePath = "D:/php/new.pdf";
$fh = fopen($filePath, 'wb');
	fwrite($fh, $content);
	fclose($fh);

$fh = fopen($filePath,'r');
$file = fread($fh,filesize($filePath));
print($file);


?>