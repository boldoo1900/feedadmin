<div class="main-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Export</a></li>
    </ul>

    <div class="row">
        <div class="col-md-4">
            <br>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="userform" name="userform" action="/export/prepzip" method="post" style="padding-left: 20px;">
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filenames[]" value="agency" id="agency">
                            <label class="form-check-label" for="agency">agency</label>
                        </div>
                        <div style="padding-left: 30px;">(agency_id,agency_name,agency_url,agency_timezone)</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filenames[]" value="routes" id="routes">
                            <label class="form-check-label" for="routes">routes</label>
                        </div>
                        <div style="padding-left: 30px;">(route_id,agency_id,route_short_name,route_long_name,route_desc,route_type,route_url,route_color,route_text_color)</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filenames[]" value="calendar" id="calendar">
                            <label class="form-check-label" for="calendar">calendar</label>
                        </div>
                        <div style="padding-left: 30px;">(service_id,monday,tuesday,wednesday,thursday,friday,saturday,sunday,start_date,end_date)</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filenames[]" value="stops" id="stops">
                            <label class="form-check-label" for="stops">stops</label>
                        </div>
                        <div style="padding-left: 30px;">(stop_id,stop_name,stop_desc,stop_lat,stop_lon,zone_id,stop_url)</div>                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filenames[]" value="stop_times" id="stop_times">
                            <label class="form-check-label" for="stop_times">stop times</label>
                        </div>
                        <div style="padding-left: 30px;">(trip_id,arrival_time,departure_time,stop_id,stop_sequence,stop_headsign,pickup_type,drop_off_type,shape_dist_traveled)</div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filenames[]" value="trips" id="trips">
                            <label class="form-check-label" for="trips">trips</label>
                        </div>
                        <div style="padding-left: 30px;">(route_id,service_id,trip_id,trip_headsign,direction_id,block_id,shape_id)</div><br>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="$('#userform').submit();"><i class="fa fa-save"></i> Export to zip</button>
                <a href="/export" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>