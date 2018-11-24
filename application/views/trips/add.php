<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Trips</a></li>
    </ul>

    <div class="row">
        <div class="col-md-4">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/trips/registration" method="post">
                        <div class="form-group">
                            <label>trip number</label>
                            <input type="text" name="trip_id" readonly="" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>route</label>
                            <?php echo form_dropdown('route_id', $routeCmb, null, array('class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <label>service</label>
                            <?php echo form_dropdown('service_id', $GLOBALS["SYS_GLOBALS"]["service"], null, array('class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <label>trip headsign</label>
                            <input type="text" name="trip_headsign" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>direction number</label>
                            <input type="text" name="direction_id" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>block number</label>
                            <input type="text" name="block_id" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>shape number</label>
                            <input type="text" name="shape_id" value="" class="form-control">
                        </div>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Save</button>
                <a href="/trips" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>