<?php include_once 'header.php'; ?>

<div class="jumbotron p-2 text-center mb-2 bg-dark text-white">    
    <h2>Admin Dashboard</h2>
</div>
<div class="row">
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-primary p-3">
            <h3><?= countrecords("students") ?></h3>
            <h4>Students</h4>
        </div>
    </div>
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-danger p-3">
            <h3><?= countrecords("teachers") ?></h3>
        <h4>Staffs</h4>
        </div>
    </div>
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-secondary p-3">
            <h3><?= countrecords("events") ?></h3>
        <h4>Events</h4>
        </div>
    </div>
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-info p-3">
            <h3><?= countrecords("users") ?> </h3>
        <h4>Users</h4>
        </div>
    </div>    
</div>

<?php include_once 'footer.php'; ?>