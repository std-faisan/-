<?php
session_start();
$u = $_SESSION['uname'];
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลประวัติส่วนตัว</title>
    <style>
        .logo{
            width: 140px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* border: 1.5px solid black; */
        }
        .signup input{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
            width: 200px;
            height: 28px;
            padding-left: 20px;
            border: 1.5px dashed black;
        }
        .signup button[type=submit]{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
            width: 224px;
            height: 32px;
            border: 1.5px double white;
            background-color: blue;
            color: white;
            border-radius: 15px;
            cursor: pointer;
            margin-bottom: 15px;
        }
        .signup button[type=reset]{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            width: 224px;
            height: 32px;
            border: 1.5px double white;
            background-color:red;
            color: white;
            border-radius: 15px;
            cursor: pointer;
        }

        .signup select{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
            width: 150 px;
            height: 32px;
            border: 1.5px double black;
            background-color: white;
            color: black;
            border-radius: 15px;
            cursor: pointer;
        }
        h2{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }
        .body{
            background-color:rgb(199, 195, 132);
            width: 270px;
            height: 430px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 80px;
            border-radius: 15px;
            box-shadow: 1000px;
        }
        a{
            color: blue;
            font-size: 16px;
            text-decoration: none;
        }
        a:visited{
            color: yellow;
        }
        a:hover{
            color: red;
        }
        /* a:active{
            
        } */
        body{
            background-image: url('images/1.jpg');
            background-size: 100% 130%;
        }
        span{
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    
<div class="body">
         <img src="images/user.png" alt="user logo" class="logo">

    <h2>เพิ่มข้อมูลประวัติส่วนตัว</h2>
    
    <form action="process_update_profile.php" method="post" enctype="multipart/from">
        <div class="signup"> 
        <input type="text" name="fullname" placeholder="ชื่อ - สกุล">
         <input type="text" name="depname" placeholder="สาขาวิชา">
         <input type="text" name="gpa" placeholder="เกรดเแลี่ย">
         <input type="file" name="avatar" >
         <button type="submit">เพิ่มข้อมูล/แก้ไข</button> 
        </div>
    </form>
</div>
    

</body>
</html>