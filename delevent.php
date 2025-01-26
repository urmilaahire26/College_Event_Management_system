<?php
$eventid=$_GET["id"];
include_once 'dbfun.php';

$link= connect();
$query="delete from events where eventid='$eventid'";
mysqli_query($link, $query);

$query="delete from bookedevent where eventid='$eventid'";
mysqli_query($link, $query);

$_SESSION["msg"]="event deleted successfully";

header("location: events.php");

