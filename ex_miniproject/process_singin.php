<?php
include "config.php";
session_start();

$u = $_POST['username'];
$p = $_POST['password'];

$sha_p = sha1($p);



$sql1 ="SELECT * FROM account WHERE uname ='$u' AND passwd = '$sha_p' ";
$qry1 = mysqli_query($conn,$sql1);
$result = mysqli_fetch_array($qry1);

if(!$result){
    echo "User name หรือ Password คุณผิดนะครับ!!!";
    header("refresh:1; url = index.html");
}else{
    if ($result['level']== "admin"){
        header("refresh:1; url = admin/index.php");
    }
    else{
       $_SESSION['uname'] = $result['uname'];
        header("refresh:1; url = home.php");
    }
}

?>