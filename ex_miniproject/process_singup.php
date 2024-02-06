<?php
include "config.php";

$u = $_POST['username'];
$p = $_POST['password'];
$l = $_POST['level'];
$sha_p = sha1($p);


$sql1 ="INSERT INTO account VALUES (0,'$u','$sha_p','$l')";
$qry1 = mysqli_query($conn,$sql1);
if(!$qry1){
    echo"ไม่อนุญาตสมัครสมาชิก";
    header("refresh:2; url = signup.html");
}else{
    $sql2 ="INSERT INTO profile(id,fullname,depname,gpa,photo,uname) VALUES (0,'','','','','$u')";
    $qry2 = mysqli_query($conn,$sql2);
    if($qry2){
        echo"สมัครสมาชิกสำเสร็จ";
        header("refresh:1; url = index.html");
        
    }
    else{
        echo"สมัครสมาชิกสำเสร็จ";
        header("refresh:1; url = signup.html");
        


    }
}
?>