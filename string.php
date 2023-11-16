<?php

$name = "faisan";
$grade ="4.00";
$score ="99";
$fullname ='muhammadfaisan';

$user ="admin";
$sql = "SELECT *FROM std WHERE user = '$user'";
$word ="I Love You";
$search ="I am study at Information ";


// Counting String
echo strlen($fullname)."<br>";
echo str_word_count($word)."คำ<br>";
echo strrev($word)."<br>";
echo strpos($search, "Information")."<br>";
echo str_replace( "Love ","Hate",$word)."<br>";
echo strtoupper($word)."<br>";
echo strtolower($word)."<br>";










?>