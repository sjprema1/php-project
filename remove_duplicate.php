

<?php
    $number = array(1, 3, 4, 2, 1, 6, 4, 9, 7, 2, 9);
    $newArr = array();
    foreach($number as $val){
       $newArr[$val] = $val;
    }
    echo '<pre>'; print_r($newArr);

    
$arr = array(8,9,10,3,4,8,7,9,11,3);
foreach($arr as $key => $val)
{
  unset($arr[$key]); 
  if (in_array($val,$arr))
  {
    echo $val . ",";
  }
} // ouput 8,9,3
?>


