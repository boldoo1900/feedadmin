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
                            <input type="text" name="agency_id" value="" readonly="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>agency name</label>
                            <input type="text" name="agency_name" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>agency url</label>
                            <input type="text" name="agency_url" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Time Zone</label>
                            <?php echo form_dropdown('agency_timezone', $timezone, null, array('class' => 'form-control')); ?>
                        </div><br>
                    </form>
                </div>
            </div>

            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-primary" onclick="fncDoSubmit();"><i class="fa fa-save"></i> Save</button>
                <a href="/agency" data-toggle="modal" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    jQuery(document).ready(function () {
        $('#userform').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-inline', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ".ignore",
            rules: {
                agency_name: {required: true},
                agency_url: {required: true},
                agency_timezone: {required: true}
            },
            messages: {
                agency_name: " ",
                agency_url: " ",
                agency_timezone: " "
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.help-inline').removeClass('ok'); // display OK icon
                $(element).closest('.form-group').removeClass('success').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change dony by hightlight
                $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            submitHandler: function (form) {
            }
        });
    });

    function fncDoSubmit() {
        if (!$("#userform").valid())
            return false;
        document.getElementById("userform").submit();
    }
</script>