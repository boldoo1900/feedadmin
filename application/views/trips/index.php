<div class="main-content">
    <div class="btn-toolbar list-toolbar">
        <a class="btn btn-primary" href="/trips/add"><i class="fa fa-plus"></i> Add</a>
        <div class="btn-group"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>trip number</th>
                        <th>route name</th>
                        <th>service number</th>
                        <th>trip headsign</th>
                        <th>direction number</th>
                        <th>block number</th>
                        <th>shape number</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($listdata)) { ?>
                        <?php foreach ($listdata as $row) { ?>
                            <tr>
                                <td><?php echo $row["trip_id"]; ?></td>
                                <td><?php echo $row["route_short_name"]; ?></td>
                                <td><?php echo $GLOBALS["SYS_GLOBALS"]["service"][$row["service_id"]]; ?></td>
                                <td><?php echo $row["trip_headsign"]; ?></td>
                                <td><?php echo $row["direction_id"]; ?></td>
                                <td><?php echo $row["block_id"]; ?></td>
                                <td><?php echo $row["shape_id"]; ?></td>
                                <td style="text-align: center;">
                                    <a href="/trips/edit/<?php echo $row["trip_id"]; ?>"><i class="fa fa-pencil fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#myModal" role="button" data-id="<?php echo $row["trip_id"]; ?>" data-toggle="modal"><i class="fa fa-trash-o fa-lg"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Delete Confirmation</h3>
            </div>
            <div class="modal-body">
                <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-danger" data-dismiss="modal" id="btn-delete">Delete</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        $('#myModal').on('show.bs.modal', function (e) {
            $('#btn-delete').click(function () {
                var id = $(e.relatedTarget).attr("data-id");
                window.location.href = "/trips/delete/"+id;
            });
            
        });
    });
</script>
