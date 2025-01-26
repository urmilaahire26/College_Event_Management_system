<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register Page</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#role").change(function () {
                    if (this.value === "student") {
                        $("#id").attr({"placeholder": "Enter Roll no"});
                    } else if (this.value === "lecturer") {
                        $("#id").attr({"placeholder": "Enter Lecturer id"});
                    } else {
                        $("#id").attr({"placeholder": "First Select role"});
                    }
                });
                $("#cpwd").blur(function () {
                    if (this.value !== $("#pwd").val()) {
                        $("#error2").html("Password not match");
                        $("#error2").removeClass("d-none");
                    } else {
                        $("#error2").addClass("d-none");
                    }
                });
                $("#id").blur(function () {
                    $.ajax({
                        url: 'Verify.php',
                        data: {'role': $("#role").val(), 'id': this.value},
                        method: 'post',
                        success: function (output) {
                            console.log(output);
                            if (output.trim() === "Invalid") {
                                $("#error").html("Invalid ID given");
                                $("#error").removeClass("d-none");
                            } else {
                                $("#uname").val(output);
                                $("#error").addClass("d-none");
                            }
                        },
                        error:function(st,err){
                            console.log(err,st);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <a href="index.php" class="btn btn-primary btn-sm float-right m-2">Home</a>
        <div class="jumbotron text-center p-5 mb-2 bg-success text-white">
            <h4>Welcome to Collage Event Management System</h4>
            <h3>Registration Form</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 mx-auto">
                    <div class="card p-3">
                        <form method="post" action="reg.php">
                            <div class="form-group">
                                <select class="form-control" required id="role" name="role">
                                    <option value="">--- Select Role ---</option>                                
                                    <option value="lecturer">Lecturer</option>
                                    <option value="student">Student</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="id" 
                                       placeholder="Select Role First" id="id">
                            </div>
                            <div id="error" class="text-danger font-weight-bold text-center d-none">                        
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" readonly 
                                       id="uname" name="uname" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" name="userid" placeholder="User ID">
                            </div>
                            <div class="form-group">
                                <input type="password" required class="form-control" id="pwd" name="pwd" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" required class="form-control" id="cpwd" name="cpwd" placeholder="Confirm Password">
                            </div>
                            <div id="error2" class="text-danger font-weight-bold text-center d-none">                        
                            </div>
                            <button class="btn btn-primary btn-block">Register Now</button>                                
                        </form>
                        <p class="text-center mt-2">Already registered Click <a href="Login.php">here</a></p>
                    </div>                    
                    <?php 
                    if(isset($_SESSION["error"])){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?= $_SESSION["error"] ?>
                        </div>
                        <?php
                        unset($_SESSION["error"]);
                    }    
                    ?>
                </div>
            </div>
        </div>
        <div class="fixed-bottom jumbotron mb-0 p-1 text-center bg-success text-white">
        <h6>Copyright College Event Management System &copy; 2023</h6>
        </div>
    </body>
</html>
