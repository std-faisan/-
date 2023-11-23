<?php

function notifyName(){
    echo"faisan";
}
notifyName();
echo "<hr color='green'>";


function factorial($num){
    $x = $num -1;
    while($x > 1){
        $num *= $x;
        $x --;
    }
    echo $num;
}
factorial(6);
echo "<hr color='green'>";


function loveMessage($love){
    echo $love;
}
loveMessage("ไปกินข้าวมั้ยที่รักกกก");
echo "<hr color='green'>";


function sum($x,$y){
    echo $x + $y;
}
sum(5,10)





?>