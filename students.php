<?php include_once 'header.php'; ?>

<div class="jumbotron p-2 text-center mb-2 bg-primary text-white">
    <button type="button" data-target="#sadd" data-toggle="modal" 
            class="btn btn-success btn-sm float-right">Add New</button>
    <h4>Students</h4>
</div>
<div class="container">
     <table class="table table-bordered table-sm table-striped">
    <thead class="table-dark">
        <tr>
            <th>Roll no</th>
            <th>Student Name</th>
            <th>City</th>
            <th>Course</th>
            <th>Email ID</th>
            <th>Phone</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach(allrecords("students") as $map){
        ?>
        <tr>
            <td><?= $map["rollno"] ?></td>
            <td><?= $map["name"] ?></td>
            <td><?= $map["city"] ?></td>
            <td><?= $map["course"] ?></td>
            <td><?= $map["email"] ?></td>
            <td><?= $map["phone"] ?></td>
            <td><a href="delstd.php?rollno=<?= $map["rollno"] ?>" 
                    onclick="return confirm('Are you sure to delete this student')" 
                    class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
     </table>        
</div>
<div class="modal fade" id="sadd">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="SaveStudent.php">
                <div class="modal-header">
                    <h4>Add New Student</h4>
                    <button type="button" data-dismiss="modal" class="close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" required class="form-control" name="rollno" placeholder="Roll no">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="name" placeholder="Student Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="course" placeholder="Class">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="email" placeholder="Email ID">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="phone" maxlength="10" placeholder="Phone Number">
                    </div>                                        
                </div>
            <div class="modal-footer">
                <button class="btn btn-primary float-right">Save Student</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
