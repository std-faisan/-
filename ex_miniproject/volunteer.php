<?php
include "config.php";
session_start();

$u = $_SESSION['uname'];

$sql ="SELECT * FROM todo WHERE uname ='$u'";
$qry = mysqli_query($conn,$sql);

if(mysqli_num_rows($qry) == 0){
    echo "ยังไมีมีข้อมูล....<br><br><br>";
    echo "<a href='add_volunteer.php' target='_parent'>";
    echo "<button style='background-color:red; width:150px height:30px color:wite;'>";
    echo "เพิ่มข้อมูลจิตอาสา</button></a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            a{
            background-color:#333;
            float: left;
            color: White;
            padding:14px 16px;
            text-decoration: none;
            text-align:center;
            font-size 16px;
            margin: right 15px;
           
        }
        a:hover{
            background-color:green;
            color: while;
        }
        table{
            display: block;
            margin: right ;

        }
        


    </style>
</head>
<body>
    <a href="add_volunteer.php" target="_parent">เพิ่มข้อมูลกิจกรรมจิตอาสา</a> 
<table>
    <tr>
        <th style="border: 1px solid red;"><b>กิจกรมม</th>
        <th style="border: 1px solid red;"><b>สถานที่</th>
        <th style="border: 1px solid red;"><b>จำนวนชั่วโมง</th>
        <th style="border: 1px solid red;"><b>วันเดือนปี</th>
        <th style="border: 1px solid red;"><b>แก้ไขข้อมูล</th>
        <th style="border: 1px solid red;"><b>ลบข้อมูล</th>
   </tr>
   <?php while ($result = mysqli_fetch_array($qry)) { ?>
    <tr>
        <td style="border: 1px solid red;"><?php echo $result['volunteer']; ?></td>
        <td style="border: 1px solid red;"><?php echo $result['location']; ?></td>
        <td style="border: 1px solid red;"><?php echo $result['hours']; ?></td>
        <td style="border: 1px solid red;"><?php echo $result['event_data']; ?></td>
        <td style="border: 1px solid red;"><a href="edit_volunteer.php"><button>แก้ไขข้อมูล</button></a></td>
        <td style="border: 1px solid red;"><a href="delete.php"><button>ลบข้อมูล</button></a></td>
    </tr>
<?php } ?>

</table>
<?php mysqli_close($conn);?>
</body>
</html>