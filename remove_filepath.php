<?php

function remove_file($dir){
    try{
        if(is_dir($dir)){
            $objects = scandir($dir);
            foreach($objects as $each_objects){
                if($each_objects !='.' && $each_objects !='..'){
                    if (is_dir($dir . "/" . $each_objects) && !is_link($dir . "/" . $each_objects)) {
                        remove_file($dir . "/" . $each_objects);
                    }

                    if (is_file($dir . "/" . $each_objects)) {

                        $existingPath = $dir . "/" . $each_objects;
                        $tmp = (explode("/", pathinfo($existingPath, PATHINFO_DIRNAME)));
                        unset($tmp[0]);
                }
            }
            else{
                return "there is no directories";
            }
        }
    }
}
    catch(Exception $e){
        echo $e->getMessage();
    }
    
$dir = __DIR__;
remove_file($dir);

}
?>