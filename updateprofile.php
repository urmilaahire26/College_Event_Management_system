    <?php
    include_once 'dbfun.php';
    extract($_POST);
    $link= connect();
    $ouserid=$_SESSION["userid"];
    $query="update users SET userid='$userid',uname='$uname' where userid='$ouserid'";
    mysqli_query($link, $query) or die("error ".mysqli_error($link));
    $_SESSION["uname"]= $uname;
    $_SESSION["userid"]= $userid;
    $_SESSION["msg"]="User Profile updated Successfully..!!";
    header("location: adminhome.php");
    