<?php
$prefix = $_POST['tes'];

switch($prefix){
    case 'นาย':
      echo "male";
      break;

    case 'นาง':
      echo "famele";
      break;   

    case 'นางสาว':
      echo "famele";
      break;  
      
    case 'เด็กชาย':
      echo "male";
      break; 

    default: 
      echo "famele";
      break;   
}
?>