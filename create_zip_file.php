<?php

$file_id = random_int(100,100000);
$file_path= 'mnt/path/storage/files';
$fileDir =dirname($file_path);

addzip($fileDir, $file_path);
array_map('unlink', glob("$fileDir/*.*"));
rmdir($fileDir);

if(file_exists($file_path)){

  $filename = $file_id.'.zip';
  ob_clean();
  // Set headers
  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Cache-Control: public");
  header("Content-Description: File Transfer");
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=\"".$filename."\"");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ".filesize($file_path));
  ob_end_flush();


  // Read the file from disk
  @readfile($file_path);

  @system("rm -rf ".$file_path);
  @system("rm  ".$file_path);
  $this->success=true;
}


function addzip($source, $dest) {
  $files = array();
  $files = glob($source . '/*');
  $zip = new ZipArchive();
  if ($zip->open($dest, ZipArchive::CREATE) !== true) {
    exit("cannot open <$dest>\n");
  }
    foreach ($files as $file) {
    $zip->addFile($file,basename($file));
    }
    $zip->close();
}


