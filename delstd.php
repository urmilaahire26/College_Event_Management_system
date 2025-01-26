<?php
$rollno=$_GET["rollno"];
include_once 'dbfun.php';

$link= connect();
$query="delete from students where rollno='$rollno'";
mysqli_query($link, $query);

$query="delete from bookedevents where id='$rollno'";
mysqli_query($link, $query);

$query="delete from users where id='$rollno'";
mysqli_query($link, $query);

$_SESSION["msg"]="student deleted successfully";

header("location: students.php");

