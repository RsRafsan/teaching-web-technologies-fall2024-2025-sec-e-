<?php
$num1=30;
$num2=10;
$num3=40;

if($num1>=$num2 && $num1>=$num3){
    echo"The largest number is $num1\n";
}

else if($num2>=$num3 && $num2>=$num1){
    echo"The largest number is $num2\n";
}

else{
    echo"The largest number is $num3\n";
}


?>