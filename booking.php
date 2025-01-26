<?php
include_once 'dbfun.php';
$eventid=$_POST["eventid"];
$id=$_SESSION["id"];

$link= connect();
$query="insert into bookedevent values('$eventid','$id')";
mysqli_query($link, $query) or die("Error ".mysqli_error($link));

$_SESSION["Event booked successfully"];
header("location: bookevent.php?eventid=$eventid");
