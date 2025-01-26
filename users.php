<?php include_once 'header.php'; ?>

<h2 class="text-center bg-primary text-white p-2">Users</h2>
<div class="container">
    <table class="table table-bordered table-sm">
        <thead class="table-primary">
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Role</th>
                <th>ID</th>            
            </tr>
        </thead>
        <tbody>
            <?php
                foreach (allrecords("users") as $map) {
            ?>
            <tr>
                <td><?= $map["userid"]?></td>
                <td><?= $map["uname"]?></td>
                <td><?= $map["pwd"]?></td>
                <td><?= $map["role"]?></td>
                <td><?= $map["id"]?></td>                        
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php'; ?>
