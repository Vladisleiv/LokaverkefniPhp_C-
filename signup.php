<?php


include "dbh.php";

$First = $_POST ['First'];
$Last = $_POST ['Last'];
$Uid = $_POST ['Uid'];
$pwd = $_POST ['pwd'];

//echo $First."<br>";
//echo $Last."<br>";
//echo $Uid."<br>";
//echo $pwd."<br>";
$sql="INSERT INTO user (First, Last, Uid, pwd) 
VALUES ('$First', '$Last', '$Uid', '$pwd')";
$result= mysqli_query($pdo,$sql);

header("Location: index.php");
