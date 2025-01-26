<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>College Event Management</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/datatables.css" rel="stylesheet" type="text/css"/>        
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/datatables.js" type="text/javascript"></script>
        <script src="js/all.js" type="text/javascript"></script>
        <style>
            .list-group-item:hover{
                background-color: black;   
                color:white;             
            }
            .list-group-item{
                border-right:1px solid black !important;
                padding:7px;
            }
              
            .toast{
                background-color:white; 
                padding:15px;
                border-radius:7px;
                position: absolute;width:300px; 
                right:10px;top:10px;
            }
        </style>
        <script>
            $(function(){
               $(".close").click(function(){ 
                   $(".toast").css({"display":"none"});
               });
            });
            </script>
    </head>
    <body>
        <?php
        include_once 'dbfun.php';
        $role = $_SESSION["role"];
        $cclass = "";
        if ($role == "admin") {
            $cclass = "bg-dark";
        } else if ($role == "lecturer") {
            $cclass = "bg-danger";
        }
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 p-0 <?= $cclass ?> text-center" style="height: 100vh;">
                    <img src="images/logo1.png" class="img-thumbnail rounded-circle m-2" style="height:150px;">
                    <ul class="list-group text-left">

                        <?php if ($role == "admin") { ?>
                            <a class="list-group-item list-group-item-action" href="AdminHome.php">Home</a>
                            <a class="list-group-item list-group-item-action" href="Categories.php">Categories</a>
                            <a class="list-group-item list-group-item-action" href="Events.php">Events</a>
                            <a class="list-group-item list-group-item-action" href="Users.php">Users</a>
                            <a class="list-group-item list-group-item-action" href="Lecturers.php">Lecturers</a>
                            <a class="list-group-item list-group-item-action" href="Students.php">Students</a>
                            <a class="list-group-item list-group-item-action" href="bookedevents.php">Booked Events</a>
                            <a class="list-group-item list-group-item-action" href="#" data-target="#updateprofile" data-toggle="modal">Change Profile</a>
                            <a class="list-group-item list-group-item-action" href="#" data-target="#changepwd" data-toggle="modal">Change Password</a>
                        <?php } else if ($role == "lecturer") { ?>
                            <a class="list-group-item list-group-item-action" href="LecturerHome.php">Home</a>
                            <a class="list-group-item list-group-item-action" href="Events.php">Events</a>
                        <?php } ?>                        
                        <a class="list-group-item list-group-item-action" href="Logout.php">Logout</a>
                    </ul>
                </div>
                <div class="col-sm-10 p-0">
                    <h5 class="float-right text-white m-3">Welcome <?= $_SESSION["uname"] ?></h5>
                    <div class="jumbotron p-3 mb-1 text-center <?= $cclass ?> text-white rounded-0">
                        <h4>Collage Event Management System</h4>
                    </div>
                    <?php include_once 'msg.php'; ?>
                    <div class="container-fluid">