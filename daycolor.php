<?php
//ให้ใช่ switch
//กำหนดคำสั่งพื้รฃนหลัง <body style='background-color:yellow;'>
$day = data('l');
// $day = "พ";
switch($day){
    case 'Monday':
      echo "<body style='background-color:yellow;'>";
      break;

    case'Tuesday':  
      echo "<body style='background-color:pink;'>";
      break;

    case 'Wednesday':
      echo "<body style='background-color:green;'>";
      break;  
      
    case 'Thursday':
      echo "<body style='background-color:orange;'>";
      break; 
      
    case 'Friday':
      echo "<body style='background-color:blue;'>";
      break; 
      
    case 'Saturday':
      echo "<body style='background-color:violet;'>";
      break; 

    default: 
      echo "<body style='background-color:red;'>";
      break;   
}









?>