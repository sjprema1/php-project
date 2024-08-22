<?php

function processDocs($path){

    foreach($path as $each_doc ){
        if(file_exists($path) && filesize($path)){
            $fileDir =dirname($path);
            $pageCount = shell_exec("identify " . $fileDir . "original -quiet | /usr/bin/wc -l");

            for ($page = 0; $page < $pageCount; $page++) {
                $pad_num = str_pad($page, 4, '0', STR_PAD_LEFT);
                $tmps = sprintf("convert -quiet -resize 1275x1650 -units PixelsPerInch -density 300 %s[%d] -flatten %spage_%s.png", $fileDir . 'original', $page, $fileDir, $pad_num);
                shell_exec($tmps);
                echo "\n"; echo $tmps; echo "\n";
    
                $tpngcrush = sprintf("/usr/bin/pngcrush -s -reduce %spage_%s.png %slarge_%s.png", $fileDir, $pad_num, $fileDir, $pad_num);
                shell_exec($tpngcrush);
                echo "\n"; echo $tpngcrush; echo "\n";
    
                // create thumbnails
    
                $pad_num = str_pad($page, 4, '0', STR_PAD_LEFT);
                $tpsmall = "";
                $tpsmall = sprintf("convert -quiet -thumbnail 200x %slarge_%s.png -flatten %ssmall_%s.png", $fileDir, $pad_num, $fileDir, $pad_num);
                echo "\n"; echo $tpsmall; echo "\n";
                shell_exec($tpsmall);
    
                 // clean file directory
                shell_exec(sprintf("/bin/find %s -type f \( -name \"page_*.png\" \) -exec /bin/rm -f {} \;", $fileDir));
    
            }


        }
    }
}
$path_array = __DIR__.'PHP is a general 1.pdf';
$path_array = __DIR__.'LoadTestDocs.tiff';
$this->processDocs($path_array)
 ?>