<div class="row">

    <?php echo form_open("auth/create_group", 'class="form-horizontal col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('create_group_heading'); ?></h1>
    <p><?php echo lang('create_group_subheading'); ?></p>
    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="form-group">
        <?php echo lang('create_group_name_label', 'group_name', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($group_name); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('create_group_desc_label', 'description', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($description); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo form_submit('submit', lang('create_group_submit_btn'),
            'class="btn btn-lg btn-primary btn-block"'); ?>
    </div>

    <?php echo form_close(); ?>
</div>
