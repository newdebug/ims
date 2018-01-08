<?php echo anchor('auth/login', '返回');?>
<div class="row">
    <?php echo form_open("auth/forgot_password", 'class="form-horizontal col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('forgot_password_heading'); ?></h1>
    <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>
    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="form-group">
        <label for="identity" class="col-sm-3 control-label">
            <?php echo(($type == 'email') ? sprintf(lang('forgot_password_email_label'),
                $identity_label) : sprintf(lang('forgot_password_username_label'), $identity_label));
            ?>
        </label>
        <div class="col-sm-9">
            <?php echo form_input($identity); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-lg btn-primary btn-block"'); ?>
    </div>

    <?php echo form_close(); ?>

</div>