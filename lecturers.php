<?php include_once 'header.php'; ?>
<div class="jumbotron p-2 text-center mb-2 bg-secondary text-white">
    <button type="button" data-target="#tadd" data-toggle="modal" 
            class="btn btn-success btn-sm float-right">Add New</button>
    <h4>Lecturers</h4>
</div>
<div class="container">
     <table class="table table-bordered table-sm">
    <thead class="table-dark">
        <tr>
            <th>Roll no</th>
            <th>Student Name</th>
            <th>City</th>
            <th>Designation</th>
            <th>Email ID</th>
            <th>Phone</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
         <?php 
        foreach(allrecords("teachers") as $map){
        ?>
        <tr>
            <td><?= $map["tid"] ?></td>
            <td><?= $map["name"] ?></td>
            <td><?= $map["city"] ?></td>
            <td><?= $map["designation"] ?></td>
            <td><?= $map["email"] ?></td>
            <td><?= $map["phone"] ?></td>
            <td><a href="dellect.php?tid=<?= $map["tid"] ?>" 
                    onclick="return confirm('Are you sure to delete this lecturer?')" 
                    class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
     </table>        
</div>
<div class="modal fade" id="tadd">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="SaveStaff.php">
                <div class="modal-header">
                    <h4>Add New Staff</h4>
                    <button type="button" data-dismiss="modal" class="close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" required class="form-control" name="tid" placeholder="Staff ID">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="name" placeholder="Staff Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="designation" placeholder="Designation">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="email" placeholder="Email ID">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" maxlength="10" name="phone" placeholder="Phone Number">
                    </div>                                        
                </div>
            <div class="modal-footer">
                <button class="btn btn-primary float-right">Save Staff</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
