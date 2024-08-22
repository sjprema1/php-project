<table width="300" cellspacing="0" cellpadding="0" border="1">  
<?php
for ($rows=1; $rows < 8 ; $rows++) { 
    echo '<tr>';
    for ($colum=1; $colum < 8; $colum++) { 
        $total = $rows + $colum;
        if($total % 2 ==0)
        {
            echo "<td width='40' height='40' bgcolor='#FFFFF'></td>";
        }
        else
        {
            echo "<td width='40' height='40' bgcolor='#00000'></td>";
        }
    }
    echo '</tr>';
 } 
?>
</table> 