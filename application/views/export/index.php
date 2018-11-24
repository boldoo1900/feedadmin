<div class="main-content">
    <div class="btn-toolbar list-toolbar">
        <a class="btn btn-primary" href="/export/add"><i class="fa fa-plus"></i> Add</a>
        <div class="btn-group"></div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <?php if (!empty($files)) { ?>
                    <?php foreach ($files as $row) { ?>
                        <li class="list-group-item">
                            <?php echo $row; ?>
                            <a href="/export/delete/<?php echo $row; ?>" style="float: right;">delete</a>
                            <a href="/export/download/<?php echo $row; ?>" style="float: right; padding-right: 10px;">download</a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>

    </div>
</div>