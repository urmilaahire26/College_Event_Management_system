<?php
include_once 'dbfun.php';
extract($_POST);
$src = $_FILES["photo"]["tmp_name"];
$filename=$_FILES["photo"]["name"];

$link= connect();
$query="insert into events(descr,catid,startdate,endate,starttime,endtime,photo) "
        . "values('$descr','$catid','$startdate','$enddate','$starttime','$endtime','$filename')";
mysqli_query($link, $query) or die("error ". mysqli_error($link));

move_uploaded_file($src, "events/$filename");
            
$_SESSION["msg"]="Event Registered Successfully..!!";

header("location: Events.php");

