<?php

extract($_POST);
include_once 'dbfun.php';
$link= connect();
$query="insert into teachers values('$tid','$name','$city','$designation','$email','$phone')";
mysqli_query($link, $query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="Lecturer added successfully.";

header("location: lecturers.php");