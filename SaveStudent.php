<?php

include_once 'dbfun.php';
extract($_POST);
$link= connect();

$query="insert into students values('$rollno','$name','$city','$course','$email','$phone')";
mysqli_query($link, $query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="Student saved successfully";
header("location: students.php");

