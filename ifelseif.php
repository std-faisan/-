<?php

//if 1 condition => true
// odd => 0 2 4 6 8
// even => 1 3 5 7 9

$num1 = 56814;
if($num1 % 2 == 0){
    echo "เลขคู่";
}
echo"<hr color='red'>";



//if else
$num2 = 954215;
if($num2 % 2 == 0){
    echo "เลขคู่";
}else{
    echo "เลขคี่";
}
echo"<hr color='red'>";



//if elseif else
$led = "green";
if($led == "green"){
    echo "ไปได้";
}elseif($led == "yollow"){
    echo "ชะลอ";
}else{
    echo "หยุด";
}

echo"<hr color='red'>";
//คำนำหน้านาม (นาย/นาง/นางสาว/ด.ช/ด.ญ)
$prefix ="นาย";
if($prefix == "นาง"){
    echo "ผู้หญิง";
}elseif($prefix == "นาย"){
    echo "ผู้ชาย";
}elseif($prefix == "นางสาว"){
    echo "ผู้หญิง";
}elseif($prefix == "ด.ช"){
    echo "ผู้ชาย";
}else{
    echo "ผู้หญิง";
}

echo"<hr color='red'>";
//switch
switch($prefix){
    case 'นาย':
      echo "ผู้ชาย";
      break;

    case 'นางสาว':
      echo "ผู้หญิง";
      break;  
      
    case 'ด.ช':
      echo "ผู้ชาย";
      break; 
          
    default:  
      echo "ผู้หญิง";
      break;
}
?>