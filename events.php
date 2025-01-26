<?php include_once 'header.php'; ?>

<div class="jumbotron p-2 text-center mb-2 bg-primary text-white">
    <button type="button" data-target="#sadd" data-toggle="modal" 
            class="btn btn-success btn-sm float-right">Add New</button>
    <h4>Events</h4>
</div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Event ID</th>
                <th style="width:400px;">Description</th>
                <th>Start Date</th>
                <th>Start Time</th>
                <th>End Date</th>
                <th>End Time</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php                
                foreach(allrecords("events order by 1 desc") as $map) {
            ?>
            <tr class="<?= $map["status"]==='cancelled' ? 'table-danger':'' ?>">
                <td><?= $map["eventid"]?></td>
                <td><?= $map["descr"]?></td>
                <td><?= $map["startdate"]?></td>
                <td><?= $map["starttime"]?></td>
                <td><?= $map["endate"]?></td>
                <td><?= $map["endtime"]?></td>
                <td>
                    <?php if($map["status"]=='scheduled') { ?>
                    <a href="cancel_event.php?id=<?= $map["eventid"] ?>" class="btn btn-danger btn-sm">Cancel Event</a>
                    <?php } ?>
                    <a href="delevent.php?id=<?= $map["eventid"] ?>" 
                    onclick="return confirm('Are you sure to delete this event')" 
                    class="btn btn-danger btn-sm">Delete</a></td>
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

