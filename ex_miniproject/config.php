<?php
// 1.ชื่อเครื่อง/ไอพีเครื่อง
// 2.ชื่อผู้ใช้งานของแม่ข่ายฐานข้อมูล
// 3.รหัสผ่านของแม่ข่ายฐานข้อมูล
// 4.ชื่อฐานข้อมูลของแม่ข่ายฐานข้อมูล

$server = "localhost";
$user = "root";
$pass = "";
$db = "phpdata";

// $conn = mysqli_connect("localhost","root","","phpdata");//แบบไม่สร้างตัวแปร
$conn =mysqli_connect($server,$user,$pass,$db);

if(!$conn){
    echo"ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้";

}
// else{
//     echo"เชื่อมต่อกับฐานข้อมูลได้";
// }









// เเบบสั้น

// $server = "localhost";
// $user = "root";
// $pass = "";
// $db = "phpdata";

// $conn =mysqli_connect($server,$user,$pass,$db);
// if(!$conn){
//     echo"ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้";
// }



?>

