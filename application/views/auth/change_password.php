<div class="row">
    <?php echo form_open("auth/change_password", 'class="form-horizontal col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('change_password_heading'); ?></h1>
    <p><?php echo lang('change_password_subheading'); ?></p>
    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="form-group">
        <?php echo lang('change_password_old_password_label', 'old_password', 'class="col-sm-4 control-label"'); ?>
        <div class="col-sm-8">
            <?php echo form_input($old_password); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('change_password_new_password_label', 'new_password', 'class="col-sm-4 control-label"'); ?>
        <div class="col-sm-8">
            <?php echo form_input($new_password); ?>
            <span id="newPasswordHelpBlock" class="help-block">
                <?php echo sprintf(lang('change_password_new_password_length_helper'), $min_password_length); ?>
            </span>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm', 'class="col-sm-4 control-label"'); ?>
        <div class="col-sm-8">
            <?php echo form_input($new_password_confirm); ?>
        </div>
    </div>

    <?php echo form_input($user_id); ?>

    <div class="form-group">
        <?php echo form_submit('submit', lang('change_password_submit_btn'),
            'class="btn btn-lg btn-primary btn-block"'); ?>
    </div>

    <?php echo form_close(); ?>
</div>