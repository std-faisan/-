<?php

$fn = "dictionary1.txt";
$fm = "a";
$ff = fopen($fn,$fm) or die ("ไม่สามารถสร้างไฟล์ได้");
$txt = "FAISAN\n";
fwrite ($ff,$txt);
$txt = "SETAE\n";
fwrite ($ff,$txt);
$txt = "IT\n";
fwrite ($ff,$txt);
fclose($ff);


?>