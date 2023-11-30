<?php
 
$student = array("faisan","weera","peera","meera");

echo $student[0]."<br>".$student[1]."<br>".$student[2]."<br>".$student[3];
echo "<br>";
echo count($student);
echo "<hr color='red'>";




//Index Array เเสดงเยอะๆ
$grade = array(1.11,2.22,3.33,4.00,1.23,2.34,3.45);
$num = count($grade);

for($x = 0; $x < $num;$x++){
 echo "เกรด:".$grade[$x]."<br>";
}
echo "<hr color='red'>";
//------------2วิธี------------------//
foreach($grade as $gr => $gl){
    echo "คน" .$gr ."ได้" .$gl ."<br>";
}
echo "<hr color='red'>";




//Associative Array
$fruits = array (
    "Apple" =>"35",
    "Banana" =>"40",
    "Grape" =>"80",
    "Strawderry" =>"3000",
    "Papaya" =>"50",
    "Durian" =>"5000",
    "Orange" =>"40"
);

foreach($fruits as $fr => $vl){
     echo "ผลไม้" .$fr ."ราคา" .$vl ."บาท/กิโลกรัม<br>";
}
echo "<hr color='red'>";






/*Mulitdimensional



*/
$std =array(
    array("101","USMAN","IT","3.50"),
    array("102","KAMPOL","BC","2.50"),
    array("103","SULKIPLEE","AC","3.75"),
    array("104","FURKON","MC","2.15")
);

echo $std[2][1],"<br>";
//----------------------//
echo "นาย".$std[3][1]."เกรด".$std[3][3],"<br>";
echo "<hr color='red'>";

//-----------------------//
$c = count($std);
for($a = 0; $a <$c; $a++){
    echo"ผลการเรียน ปวส.1(2566)";
    for($b = 0; $b < 4; $b++){
        echo "<li>";
        echo $std[$a][$b];
    }
    echo"</li>";
}
echo "<hr color='red'>";



// Sorting Array
//sort() -sort arrys in ascending order
sort($grade);
foreach($grade as $gd){
    echo"เกรด :" .$gd ."/";
}
echo "<hr color='red'>";

//-----------------------//
rsort($grade);
foreach($grade as $gd){
    echo"เกรด :" .$gd ."/";
}
echo "<hr color='red'>";

//-----------------------//
asort($fruits);
foreach($fruits as $fr =>$vl){
    echo"ผลไม้ :" .$fr ."ราคา".$vl."บาท/กิโลกรัม<br>";
}
echo "<hr color='red'>";

//-----------------------//
ksort($fruits);
foreach($fruits as $fr =>$vl){
    echo"ผลไม้ :" .$fr ."ราคา".$vl."บาท/กิโลกรัม<br>";
}
echo "<hr color='red'>";

//-----------------------//
arsort($fruits);
foreach($fruits as $fr =>$vl){
    echo"ผลไม้ :" .$fr ."ราคา".$vl."บาท/กิโลกรัม<br>";
}
echo "<hr color='red'>";

//-----------------------//
krsort($fruits);
foreach($fruits as $fr =>$vl){
    echo"ผลไม้ :" .$fr ."ราคา".$vl."บาท/กิโลกรัม<br>";
}
echo "<hr color='red'>";

?>