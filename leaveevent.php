<?php
include_once 'dbfun.php';
	$eventid=$_GET["eventid"];
    $id=$_SESSION["id"];
    $link=connect();
    mysqli_query($link,"delete from bookedevent where eventid=$eventid and id='$id'");
    
   
    
    header("location: studenthome.php");
?>