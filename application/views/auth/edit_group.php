<div class="row">
    <?php echo form_open(current_url(), 'class="col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('edit_group_heading'); ?></h1>
    <p><?php echo lang('edit_group_subheading'); ?></p>
    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="form-group">
        <?php echo lang('edit_group_name_label', 'group_name', 'class="control-label"'); ?> <br/>
        <?php echo form_input($group_name); ?>
    </div>

    <div class="form-group">
        <?php echo lang('edit_group_desc_label', 'description', 'class="control-label"'); ?> <br/>
        <?php echo form_input($group_description); ?>
    </div>

    <div>
        <?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-lg btn-primary btn-block"'); ?>
    </div>

    <?php echo form_close(); ?>
</div>