<?php
include "config.php";
session_start();

$u = $_SESSION['uname'];

$sql ="SELECT * FROM profile WHERE uname ='$u'";
$qry = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a{
            width: 200px;
            margin-top: 25px;
            padding:14px 16px;  
            display: block;
            margin-left: auto;
            margin-right: auto;  
        }
        a{ 
            background-color:#333;
            color: White;
            padding:14px 16px;
            text-decoration: none;
            font-size 16px;
        }
        a:hover{
            background-color:green;
            color: while;
        }

        .images{
            width: 180px;
            margin-top: 25px;
            padding:14px 16px;  
            display: block;
            margin-left: auto;
            margin-right: auto;  
        }
        table{
            width: 200px;
            margin-top: 25px;
            padding:14px 16px;  
            display: block;
            margin-left: auto;
            margin-right: auto;  
        }


    </style>
</head>
<body>
    <div class="a">
       <a href="update_profile.php" target="_blank">เพิ่มข้อมูลประวัติส่วนตัว</a> <br><br>
    </div>

    <div class="images">
      <img src="images<?php echo $result['photo'];?>" alt="profile">
    </div>

    
<table>
    <tr>
        <td style="border: 1px solid red;"><b> ชื่อ-สกุล</td>
        <td style="border: 1px solid red;"><?php echo $result['fullname']; ?></td>
   </tr>
    <tr>
        <td style="border: 1px solid red;"><b>สาขาวิชา</td>
        <td style="border: 1px solid red;"><?php echo $result['depname'];?></td>
    </tr>    
    <tr>
        <td style="border: 1px solid red;"><b> เกรดเฉลี่ย</td>
        <td style="border: 1px solid red;"><?php echo $result['gpa'];?></td>
    </tr>
</table>
<?php  mysqli_close($conn);?>
</body>
</html>
