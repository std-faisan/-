<?php

$ff = fopen("dictionary.txt","r") or die ("ไม่พบไฟล์");
// echo $ff;
echo fread($ff,filesize("dictionary.txt") )
fclose($ff);



// $fn = "dictionary.txt"
// $fm = "r"
// $ff = fopen("$fn","$fm") or die ("ไม่พบไฟล์");
// // echo $ff;
// echo fread($ff,filesize("$fn") )
// fclose($ff);


?>