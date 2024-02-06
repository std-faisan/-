<?php 
session_start();
session_unset();
session_destroy();


echo"<h2> คุณได้ออกจากระบบเรียบร้อยเเล้ว</h2>";
echo"<h2> รอสักครู่......</h2>";
header("refresh: 3; url = index.html");




?>