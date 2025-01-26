<?php include_once 'header.php'; ?>
<h2>Lecturer Dashboard</h2>
<?php
    $id = $_SESSION["id"];
    $map = single("teachers", "tid=$id");
?>
<div class="container">
    <div class="row">
        <div  class="col-sm-7">
            <table class="table table-bordered">
                <tr>
                    <th style="width:200px;">Teacher ID</th>
                    <th><?= $map["tid"]?></th>
                </tr>
                <tr>
                    <th>Teacher Name</th>
                    <th><?= $map["name"]?></th>
                </tr>
                <tr>
                    <th>Designation</th>
                    <th><?= $map["designation"]?></th>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <th><?= $map["email"]?></th>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <th><?= $map["phone"]?></th>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>