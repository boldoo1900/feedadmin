<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Agency</a></li>
    </ul>
    
    <div class="row">
        <div class="col-md-4">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/agency/registration" method="post">
                        <div class="form-group">
                            <label>agency number</label>
                            <input type="text" name="agency_id" value="<?php echo $data["agency_id"]; ?>" readonly="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>agency name</label>
                            <input type="text" name="agency_name" value="<?php echo $data["agency_name"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>agency url</label>
                            <input type="text" name="agency_url" value="<?php echo $data["agency_url"]; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Time Zone</label>
                            <?php echo form_dropdown('agency_timezone', $timezone, $data["agency_timezone"], array('class'=>'form-control')); ?>
                        </div><br>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Save</button>
                <a href="/agency" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>