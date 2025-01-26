<?php
$catid=$_GET["catid"];
include_once 'dbfun.php';

$link= connect();
$query="delete from events where catid='$catid'";
mysqli_query($link, $query);

$query="delete from category where catid='$catid'";
mysqli_query($link, $query);

$_SESSION["msg"]="category deleted successfully";

header("location: categories.php");

