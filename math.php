<?php

echo pi();
echo "<br>";
// echo 22/7;
// echo "<br>";

// พายอาหาวงกลม
echo pi()*4*4;
echo "<br>";

$r =4;
$area = pi() * $r *$r;
echo "$area";
echo "<br>";

// หาค่าต่ำ/สุง
$num =[1,2,3,4,5,10,50,34,16,24,100];
echo min($num);
echo "<br>";
echo max($num);
echo "<br>";

// ลบเป็นบวก
echo abs(-99.99);
echo "<br>";

// รูด
echo sqrt(25);
echo "<br>";

// ปัดโทสนิยม
echo round(3.69);
echo "<br>";

// สุ่ม
echo rand(00000000,99999999);




?>