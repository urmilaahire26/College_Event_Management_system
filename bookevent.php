<?php include_once 'mheader.php'; ?>
<div class="p-1"></div>
<?php
    $eventid = $_GET["eventid"];
    $map = single("events", "eventid=$eventid");
    $map2 = single("category", "catid='{$map["catid"]}'");
    $cname = $map2["catname"];
?>
<div class="container">s
    <h2>Book Event</h2>
    <div class="row">
        <div class="col-sm-4 p-0">
            <img src="events/<?= $map["photo"]?>" alt="event image" class="img-thumbnail">
        </div>
        <div class="col-sm-8">
            <h4><?= $cname?></h4>
            <p><?= $map["descr"]?></p>
            <h5>Date : <?= $map["startdate"]?> to <?= $map["endate"]?></h5>
            <h5>Time : <?= $map["starttime"]?> to <?= $map["endtime"]?></h5>
            <?php
                if (!isset($_SESSION["id"])) {
                    header("location: Login.php");
                } else {
                    $id = $_SESSION["id"];
                    $data2 = findall("bookedevent", "eventid=$eventid and id=$id");
                    if (count($data2) > 0) {
            ?>
            <h5 class="text-success mt-3">Event booked</h5>
            <?php
            } else {
            ?>
            <form method="post" action="booking.php">
                <input type="hidden" value="<?= $eventid?>" name="eventid">
                <button class="btn btn-primary mt-3">Book Event</button>                
            </form>
            <?php
                    }
                }
            if(isset($_SESSION["msg"])){
                ?>
                <div class="alert alert-success text-center">
                    <?= $_SESSION["msg"] ?>
                </div>
                <?php
                unset($_SESSION["msg"]);
            }    
            ?>
        </div>
    </div>
</div>
<?php include_once 'mfooter.php'; ?>
