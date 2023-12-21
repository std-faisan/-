<?php

$fn = "dictionary1.txt";
$fm = "w";
$ff = fopen($fn,$fm) or die ("ไม่ลบข้อมูลในไฟล์ได้ หรือ ไม่สามารถสร้างไฟล์ได้");
$txt = "FAISAN\n";
fwrite ($ff,$txt);
fclose($ff);


?>