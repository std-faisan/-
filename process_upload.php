<?php

$folder_name = "filess/";
$new_file = date('Ymd').$_FILES['upfile']['name'];
// $file_name = $_FILES['upfile']['name'];
// $basename = basename($_FILES['upfile']['name']);
$base_name = $folder_name.basename($_FILES['upfile']['name']);
// $ext_name = pathinfo($file_name,PATHINFO_EXTENSION);
// $ext_name = pathinfo($base_name,PATHINFO_EXTENSION);
$ext_name = strtolower (pathinfo($base_name,PATHINFO_EXTENSION));
$file_image = getimagesize($_FILES['upfile']['tmp_name']);
// if ($file_size == true){
//     echo "เป็นไฟล์รูปภาพ";
// }else{
//     echo "ไม่ใช่ไฟล์รูปภาพ";
// }
$file_dup = file_exists($base_name);
// if($file_dup == false){
//     echo "ไม่มีไฟล์ซ้ำ";
// }
$file_size =($_FILES['upfile']['size']);

if($file_image == false){
    echo "คุณไม่ได้ส่งรูปภาพ";
}elseif($ext_name !="jpg" && $ext_name !="jpeg"){
    echo "คุณไม่ได้ส่งรูปภาพเป็น jpg/jpeg";
}elseif($file_size >100000){
    echo "คุณส่งรูปภาพใหญ่เกิน 100KB";
}elseif($file_dup){
    echo "คุณส่งรูปภาพซ้ำ";
}else{
    // move_uploaded_file($_FILES['upfile']['tmp_name'],"filess/".$file_name);
move_uploaded_file($_FILES['upfile']['tmp_name'],$base_name);
echo "คุณส่งรูปภาพเรียบร้อยเเล้ว";
}

?>