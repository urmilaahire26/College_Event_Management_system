<?php include_once 'mheader.php'; ?>
<div class="p-1"></div>
<div class="container-fluid">
    <?php
        $id = $_SESSION["id"];
        $map = single("students", "rollno=$id");
    ?>
    <h2>Student Dashboard</h2>
    <div class="row">
        <div class="col-sm-8">
            <h4>Booked Event</h4>
            <div class="row">
                <?php
                    $list = findall("events", "eventid in(SELECT eventid from bookedevent WHERE id='$id')");
                    foreach ($list as $map2) {
                        $map3 = single("category", "catid='{$map2["catid"]}'");
                        $cname = $map3["catname"];
                ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height:200px;" src="events/<?= $map2["photo"]?>" data-holder-rendered="true">
                        <div class="card-body">
                            <h5><?= $cname?></h5>                    
                            <p class="my-0">Date : <?= $map2["startdate"]?> to <?= $map2["endate"]?></p>
                            <p>Time: <?= $map2["starttime"]?> to <?= $map2["endtime"]?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <?php if($map2["status"]=='cancelled') { ?>
                                    <h5 class='text-danger'>This event has been cancelled</h5>
                                <?php } else { ?>
                                <div class="btn-group">
                                    <a href="leaveevent.php?eventid=<?= $map2["eventid"]?>" class="btn btn-sm btn-outline-danger">Leave Event</a>                      
                                </div>         
                                <?php } ?>           
                            </div>
                        </div>
                    </div>
                </div>
                <?php }
                ?>
            </div>
        </div>
        <div  class="col-sm-4">
            <table class="table table-bordered">
                <tr>
                    <th style="width:200px;">Roll no</th>
                    <th><?= $map["rollno"]?></th>
                </tr>
                <tr>
                    <th>Student Name</th>
                    <th><?= $map["name"]?></th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th><?= $map["course"]?></th>
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
<?php include_once 'mfooter.php'; ?>