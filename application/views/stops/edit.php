<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Stops</a></li>
    </ul>

    <div class="row">
        <div class="col-md-4">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/stops/registration" method="post">
                        <div class="form-group">
                            <label>stop number</label>
                            <input type="text" name="stop_id" readonly="" value="<?php echo $data["stop_id"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop name</label>
                            <input type="text" name="stop_name" value="<?php echo $data["stop_name"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop desc</label>
                            <input type="text" name="stop_desc" value="<?php echo $data["stop_desc"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop lat</label>
                            <input type="text" name="stop_lat" value="<?php echo $data["stop_lat"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop lon</label>
                            <input type="text" name="stop_lon" value="<?php echo $data["stop_lon"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>zone number</label>
                            <input type="text" name="zone_id" value="<?php echo $data["zone_id"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>stop url</label>
                            <input type="text" name="stop_url" value="<?php echo $data["stop_url"]; ?>" class="form-control">
                        </div>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Save</button>
                <a href="/stops" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>