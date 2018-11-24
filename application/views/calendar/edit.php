<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Calendar</a></li>
    </ul>
    
    <div class="row">
        <div class="col-md-4">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/calendar/registration" method="post">
                        <input type="hidden" name="action" value="edit" />
                        
                        <div class="form-group">
                            <label>service number</label>
                            <?php echo form_dropdown('service_id', $sys_globals["service"], $data["service_id"], array('class' => 'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">monday&nbsp;</label>

                                <input class="form-check-input" name="monday" type="radio" id="mon_yes" value="1" <?php echo $data["monday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="mon_yes">yes</label>
                                
                                <input class="form-check-input" name="monday" type="radio" id="mon_no" value="0" <?php echo ($data["monday"] == "0" ? "checked":""); ?> >
                                <label class="form-check-label" for="mon_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">tuesday&nbsp;</label>

                                <input class="form-check-input" name="tuesday" type="radio" id="tue_yes" checked="checked" value="1" <?php echo $data["tuesday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="tue_yes">yes</label>

                                <input class="form-check-input" name="tuesday" type="radio" id="tue_no" value="0" <?php echo $data["tuesday"] == "0" ? "checked":""; ?> >
                                <label class="form-check-label" for="tue_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">wednesday&nbsp;</label>

                                <input class="form-check-input" name="wednesday" type="radio" id="wed_yes" checked="checked" value="1" <?php echo $data["wednesday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="wed_yes">yes</label>

                                <input class="form-check-input" name="wednesday" type="radio" id="wed_no" value="0" <?php echo $data["wednesday"] == "0" ? "checked":""; ?> >
                                <label class="form-check-label" for="wed_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">thursday&nbsp;</label>

                                <input class="form-check-input" name="thursday" type="radio" id="thu_yes" checked="checked" value="1" <?php echo $data["thursday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="thu_yes">yes</label>

                                <input class="form-check-input" name="thursday" type="radio" id="thu_no" value="0" <?php echo $data["thursday"] == "0" ? "checked":""; ?> >
                                <label class="form-check-label" for="thu_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">friday&nbsp;</label>

                                <input class="form-check-input" name="friday" type="radio" id="fri_yes" checked="checked" value="1" <?php echo $data["friday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="fri_yes">yes</label>

                                <input class="form-check-input" name="friday" type="radio" id="fri_no" value="0" <?php echo $data["friday"] == "0" ? "checked":""; ?> >
                                <label class="form-check-label" for="fri_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">saturday&nbsp;</label>

                                <input class="form-check-input" name="saturday" type="radio" id="sat_yes" checked="checked" value="1" <?php echo $data["saturday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="sat_yes">yes</label>

                                <input class="form-check-input" name="saturday" type="radio" id="sat_no" value="0" <?php echo $data["saturday"] == "0" ? "checked":""; ?> >
                                <label class="form-check-label" for="sat_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label style="width: 80px;">sunday&nbsp;</label>

                                <input class="form-check-input" name="sunday" type="radio" id="sun_yes" checked="checked" value="1" <?php echo $data["sunday"] == "1" ? "checked":""; ?> >
                                <label class="form-check-label" for="sun_yes">yes</label>

                                <input class="form-check-input" name="sunday" type="radio" id="sun_no" value="0" <?php echo $data["sunday"] == "0" ? "checked":""; ?> >
                                <label class="form-check-label" for="sun_no">no</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>start date</label>
                            <div class="input-group date datepicker">
                                <input type="text" name="start_date" value="<?php echo $data["start_date"]; ?>" class="form-control">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>end date</label>
                            <div class="input-group date datepicker">
                                <input type="text" name="end_date" value="<?php echo $data["end_date"]; ?>" class="form-control">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Save</button>
                <a href="/calendar" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(function () {
        $('.datepicker').datetimepicker();
    });
</script>