<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Trips</a></li>
    </ul>

    <div class="row">
        <div class="col-md-4">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/stoptimes/registration" method="post">
                        <div class="form-group">
                            <label>stoptime number</label>
                            <input type="text" name="stoptime_id" readonly="" value="<?php echo $data["stoptime_id"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>route</label>
                            <?php echo form_dropdown('trip_id', $tripsCmb, $data["trip_id"], array('class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <label>stop </label>
                            <?php echo form_dropdown('stop_id', $stopsCmb, $data["stop_id"], array('class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <label>arrival time</label>
                            <input type="text" name="arrival_time" value="<?php echo $data["arrival_time"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>departure time</label>
                            <input type="text" name="departure_time" value="<?php echo $data["departure_time"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop sequence</label>
                            <input type="text" name="stop_sequence" value="<?php echo $data["stop_sequence"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop headsign</label>
                            <input type="text" name="stop_headsign" value="<?php echo $data["stop_headsign"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>pickup type</label>
                            <input type="text" name="pickup_type" value="<?php echo $data["pickup_type"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>drop off type</label>
                            <input type="text" name="drop_off_type" value="<?php echo $data["drop_off_type"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>shape dist traveled</label>
                            <input type="text" name="shape_dist_traveled" value="<?php echo $data["shape_dist_traveled"]; ?>" class="form-control">
                        </div>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Save</button>
                <a href="/stoptimes" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>