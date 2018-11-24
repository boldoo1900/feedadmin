<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Routes</a></li>
    </ul>
    
    <div class="row">
        <div class="col-md-5">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/routes/registration" method="post">
                        <div class="form-group">
                            <label>route number</label>
                            <input type="text" name="route_id" value="<?php echo $data["route_id"]; ?>" readonly="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>agency</label>
                            <?php echo form_dropdown('agency_id', $agencyCmb, $data["agency_id"], array('class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <label>short name</label>
                            <input type="text" name="route_short_name" value="<?php echo $data["route_short_name"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>long name</label>
                            <input type="text" name="route_long_name" value="<?php echo $data["route_long_name"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>route description</label>
                            <textarea name="route_desc" class="form-control input-lg" rows="5"><?php echo $data["route_desc"]; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>route type</label>
                            <?php echo form_dropdown('route_type', $sys_globals["route_type"], $data["route_type"], array('class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <label>route url</label>
                            <input type="text" name="route_url" value="<?php echo $data["route_url"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>route color</label>
                            <input type="text" name="route_color" value="<?php echo $data["route_color"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>route text color</label>
                            <input type="text" name="route_text_color" value="<?php echo $data["route_text_color"]; ?>" class="form-control">
                        </div><br>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Save</button>
                <a href="/routes" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>