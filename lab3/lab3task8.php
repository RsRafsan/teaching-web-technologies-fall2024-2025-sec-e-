<?php


$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];


for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
      
        if ($i == 0 && $j <= 2) { 
            echo $array[$i][$j] . " ";
        } 
        elseif ($i == 1 && $j <= 1) {
            echo $array[$i][$j] . " ";
        }
         elseif ($i == 2 && $j == 0) { 
            echo $array[$i][$j] . " ";
        }
    }
    echo "\n<br>";
}
echo "\n<br>";
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {

        if ($i == 0 && $j == 3) { 
            echo $array[$i][$j] . " ";
        } 
        elseif ($i == 1 && $j >= 2) { 
            echo $array[$i][$j] . " ";
        }
         elseif ($i == 2 && $j >= 1) { 
            echo $array[$i][$j] . " ";
        }
    }
    echo "\n<br>";
}
echo "\n<br>";
?>
 