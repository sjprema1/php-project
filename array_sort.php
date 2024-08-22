<?php 
function ascending_order(){
    $array = array(1, 6, 23, 10, 3, 2, 15,7);
    $total = count($array);
    for ($i=0; $i < $total; $i++) { 
        for ($j=$i+1; $j < $total; $j++) { 
            if($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo '<pre>';
    echo "Ascending Sorted Array is: "; 
    print_r($array);
}

function smallest_array(){
    $array = array(1, 6, 23, 10, 3, 2, 15,7);
    $total = count($array);
    $small = $array[0];
    for ($i=0; $i < $total; $i++) { 
            if($array[$i] < $small) {
                $small = $array[$i];
               
            }
        
    }
    echo '<pre>';
    echo "Ascending Sorted Array is: "; 
    print_r($array);
}

function sortArray(){
    $array = array(1, 6, 23, 10, 3, 2, 15,7);
    $rarray = array(1, 6, 23, 10, 3, 2, 15,7);
    sort($array);
    print_r($array);
    rsort($rarray);
    print_r($rarray);

}
sortArray();
?>