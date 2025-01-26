<?php include_once 'header.php'; ?>

<div class="jumbotron p-2 text-center mb-2 bg-primary text-white">
    <h4>Booked Events</h4>
</div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:400px;">Event</th>
                <th>Date</th>
                <th>Time</th>
                <th>Student Name</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php                
                foreach(allrecords("events e join bookedevent be on be.eventid=e.eventid join students s on be.id=s.rollno order by 1 desc") as $map) {
            ?>
            <tr class="<?= $map["status"]==='cancelled' ? 'table-danger':'' ?>">
                <td><?= $map["descr"]?></td>
                <td><?= $map["startdate"]?> to <?= $map["endate"]?></td>
                <td><?= $map["starttime"]?>-<?= $map["endtime"]?></td>
                <td><?= $map["name"]?></td>
                <td><?= $map["course"]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>        
<div class="modal fade" id="sadd">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="save_event.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4>Add New Event</h4>
                    <button type="button" data-dismiss="modal" class="close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="catid">
                            <option><-- Select Category --></option>
                            <?php
                                foreach (allrecords("category") as $map2) {
                            ?>
                            <option value="<?= $map2["catid"]?>"><?= $map2["catname"]?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="descr" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="startdate" placeholder="Start Date">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="starttime" placeholder="Start Time">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="enddate" placeholder="End Date">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="endtime" placeholder="End Time">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="photo">
                    </div>                                        
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary float-right">Save Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>

