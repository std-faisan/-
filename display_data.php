<?php

include "config.php";

$sql1 = "SHOW TABLES";
$qry1 = mysqli_query($conn,$sql1);
// $result1 = mysqli_num_rows($qry1); นับจำนวนข้อมูล
$result1 = mysqli_fetch_array($qry1); //เเสดงข้อมูล
echo $result1[0];


echo"<hr color='red'>";



$sql2 = "SELECT * FROM account";
$qry2 = mysqli_query($conn,$sql2);
if(mysqli_num_rows($qry2) == 0){
    echo"ไม่มีข้อมูล";
} else{
    // echo $result2['uname'];//ดูเเค่คนเเรก
    while($result2 = mysqli_fetch_assoc($qry2)){
        echo "Usename:".$result2['uname'];
        echo "Passwoed:".$result2['passwd'];
        echo "Lavel:".$result2['level'];
        echo"<hr color='red'>";
    }
}

$qry3 = mysqli_query($conn,$sql3);
?>


<html>
<table>
    <tr>
        <td style="border: 1px solid red;"><b> Usename</td>
        <td style="border: 1px solid red;"><b> Passwoed</td>
        <td style="border: 1px solid red;"><b> Lavel</td>
    </tr>

    <?php while($result3 = mysqli_fetch_array($qry3)){?>
 <tr>
     <td style="border: 1px solid red;"><?php echo $result3['uname'];?></td>
     <td style="border: 1px solid red;"><?php echo $result3['passwd'];?></td>
     <td style="border: 1px solid red;"><?php echo $result3['level'];?></td>
</tr>
    <?php }?>
</table>

<?php  mysqli_close($conn); ?> ปิดฐานข้อมูล 
</html>
