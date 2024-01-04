<?php

$folder_name = "file_uploads/";
$file_name = $_FILES['upfile']['name'];
$base_name = $folder_name.basename($_FILES['upfile']['name']);
$ext_name = strtolower (pathinfo($base_name,PATHINFO_EXTENSION));
$file_dup = file_exists($base_name);
$file_size =($_FILES['upfile']['size']);
if($file_name == false){
    echo "<body style='font-size:50px;text-align: center;margin-top: 15rem;'>";
    echo "คุณไม่ได้เลือกไฟล์น้าที่รักกกกกก โปรดเลือกก่อนน้าาา";
}elseif($ext_name !="docx" && $ext_name !="xlsx"){
    echo "<body style='font-size:50px;text-align:center;margin-top: 15rem;'>";
    echo "คุณส่งไฟล์ผิดน้าาา ต้องเป็นนามสกุล .docx /.xlsx";
}elseif($file_size >1000000){
    echo "<body style='font-size:50px;text-align: center;margin-top: 15rem;'>";
    echo "คุณส่งไฟล์ใหญ่เกิน 1 MBน้าที่รักกกกกก";
}elseif($file_dup){
    echo "<body style='font-size:50px;text-align: center;margin-top: 15rem;'>";
    echo "คุณส่งไฟล์ซ้ำน้าที่รักกก ";
}else{
move_uploaded_file($_FILES['upfile']['tmp_name'],$base_name);
  echo "<body style='font-size:50px;text-align: center;margin-top: 15rem;'>";
  echo "คุณส่งไฟล์เรียบร้อยเเล้วน้าาาที่รักกก";
}
?>