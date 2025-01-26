<?php
include_once 'dbfun.php';
$eventid=$_GET["id"];
$link= connect();
$query="UPDATE events set status='cancelled' WHERE eventid='$eventid'";
mysqli_query($link, $query) or die("Error ".mysqli_error($link));
    
// $query="DELETE FROM bookedevent WHERE eventid='$eventid'";
// mysqli_query($link, $query) or die("Error ".mysqli_error($link));    

$_SESSION["msg"]="Event cancelled Successfully..!!";
    
header("location: events.php");

