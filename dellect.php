<?php
$tid=$_GET["tid"];
include_once 'dbfun.php';

$link= connect();
$query="delete from teachers where tid='$tid'";
mysqli_query($link, $query);

$query="delete from users where id='$tid'";
mysqli_query($link, $query);

$_SESSION["msg"]="teacher deleted successfully";

header("location: lecturers.php");

