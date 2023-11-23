<?php
$num1= 1;
do{
    echo $num1."<br>";
    $num1++;
}while($num1 <= 10);
echo "<hr color='red'>";

$num2= 10;
do{
    echo $num2."<br>";
    $num2--;
}while($num2 >= 1);
echo "<hr color='red'>";

$num3= 10;
// เเสดงเลข 10-100
do{
    echo $num3."<br>";
    $num3++;
    $num3 = $num3 +5
}while($num3 <= 100);
echo "<hr color='red'>";

$num4= 100;
do{
    echo $num4."<br>";
    $num4 = $num4 -10;
     // $num4 -=10;
}while($num4 >= 10);
echo "<hr color='red'>";

$num5= 1;
do{
    echo $num5."<br>";
    $num5++;
}while($num5 <= 10);
echo "<hr color='red'>";




// สูตรคูณเเม่99
// จาก 1 x 12
$pre = 1;
$m = 99;
$n =12;
do{
    echo $m." X ".$pre." = ".($m * $pre);
    echo "<br>";
    $pre++;
} while($pre <= $n);
   










?>