<?php
include "config.php";
session_start();

$u = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลกิจกรรมจิตอาสา</title>
    <style>
        .add input{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
            width: 200px;
            height: 28px;
            padding-left: 20px;
            border: 1.5px dashed black;
        }
        .add button[type=submit]{
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
        a button{
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
            text-decoration:none;
        }
        .logo{
            width: 140px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* border: 1.5px solid black; */
        }
        body{
            background-image: url('images/1.jpg');
            background-size: 100% 150%;
        }

    </style>
</head>
<body>
    <div class="add">
    <img src="images/user.png" alt="user logo" class="logo">
        <form action="process_add_volunteer.php" method="post">
            <input type="text" name="volunteer">
            <input type="text" name="location">
            <input type="number" name="hours">
            <input type="date" name="dayevent"> 
            <button type="submit">บันทึกข้อมูล</button>
        </form>
        <a href="home.php">
           <button>กลับไปยังโฮม</button>
        </a>
    </div>
    
</body>
</html>