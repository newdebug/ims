<div class="row">

    <?php echo form_open("auth/create_user", 'class="form-horizontal col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('create_user_heading'); ?></h1>
    <p><?php echo lang('create_user_subheading'); ?></p>
    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="form-group">
        <?php echo lang('create_user_fname_label', 'first_name', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($first_name); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('create_user_lname_label', 'last_name', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($last_name); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('create_user_company_label', 'company', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($company); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('create_user_phone_label', 'phone', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($phone); ?>
        </div>
    </div>

    <?php if ($identity_column !== 'email'): ?>
     <div class="form-group">
        <?php
        echo lang('create_user_identity_label', 'identity', 'class="col-sm-3 control-label"');
        echo form_error('identity');
        ?>
        <div class="col-sm-9">
            <?php echo form_input($identity);?>
            <span id="identityHelpBlock" class="help-block"><?php echo lang('create_user_identity_helper_label')?></span>
        </div>
     </div>
    <?php endif; ?>

    <div class="form-group">
        <?php echo lang('create_user_email_label', 'email', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($email); ?>
            <span id="emailHelpBlock" class="help-block"><?php echo lang('create_user_email_helper_label')?></span>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('create_user_password_label', 'password', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($password); ?>
            <span id="newPasswordHelpBlock" class="help-block">
                <?php echo sprintf(lang('change_password_new_password_length_helper'), $min_password_length); ?>
            </span>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('create_user_password_confirm_label', 'password_confirm', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($password_confirm); ?>
        </div>
    </div>

    <div class="">
        <?php echo form_submit('submit', lang('create_user_submit_btn'),
            'class="btn btn-lg btn-primary btn-block"'); ?>
    </div>
    <?php echo form_close(); ?>
</div>