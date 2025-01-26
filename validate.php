<?php

include_once 'dbfun.php';
extract($_POST);

$link= connect();

$query="SELECT * FROM users WHERE userid='$userid' and pwd='$pwd' and role='$role'";

$result=mysqli_query($link, $query) or die("Error ". mysqli_error($link));

if($row= mysqli_fetch_assoc($result)){
    $_SESSION["uname"]=$row["uname"];
    $_SESSION["userid"]=$row["userid"];
    $_SESSION["role"]=$row["role"];
    $_SESSION["id"]=$row["id"];
    if($_SESSION["role"]=="admin"){
        header("location: adminhome.php");
    }
    else if($_SESSION["role"]=="lecturer"){
        header("location: lecturerhome.php");
    }
    else if($_SESSION["role"]=="student"){
        header("location: studenthome.php");
    }            
}
else{
    $_SESSION["error"]="Invalid username or password";
    header("location: login.php");
}
