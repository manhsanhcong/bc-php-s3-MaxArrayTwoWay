<!DOCTYPE html>
<html>
<body>
<?php
   $arr = [
       [6,35,7],
       [32,5,24],
       [76,2,19]
       ];
   $max = 0;
   $index = [0];
   $index = [0];
   for ($i = 0; $i < count($arr); $i++) {
       for ($j = 0; $j < count($arr); $j++) {
           if ($max < $arr[$i][$j]) {
               $max = $arr[$i][$j];
               $index1 = $i;
               $index2 = $j;
               }
            }
       }
       echo $max . '<br/>';
       echo $index1 . '<br/>';
       echo $index2;
?>
</body>
</html>