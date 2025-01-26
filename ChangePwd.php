<?php
include_once 'dbfun.php';
$old=$_POST["opwd"];
$userid=$_SESSION["userid"];
$pwd=$_POST["pwd"];    

$link= connect();
$result=mysqli_query($link,"select * from users where userid='$userid' and pwd='$old'");
if($row= mysqli_fetch_assoc($result)){
    $query="update users set pwd='$pwd' where userid='$userid'";       
    mysqli_query($link, $query) or die("error ".mysqli_error($link));
    $_SESSION["msg"]="Password changed Successfully..!!";
}else{        
    $_SESSION["error"]="Incorrect current password..!!";
}

header("location: AdminHome.php");
