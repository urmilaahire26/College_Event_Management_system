<?php
include 'dbfun.php';

extract($_POST);

$link= connect();
$query="insert into users values('$userid','$uname','$pwd','$role','$id')";

mysqli_query($link, $query) or die("Error ". mysqli_error($link));

$_SESSION["msg"]="User registered..";

header("location: login.php");
