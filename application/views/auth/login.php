<div class="row">
    <?php echo form_open("auth/login", 'class="col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('login_heading'); ?></h1>
    <p><?php echo lang('login_subheading'); ?></p>
    <div id="infoMessage"><?php echo $message;?></div>

    <p>
        <?php echo lang('login_identity_label', 'identity', array('class' => 'sr-only')); ?>
        <?php echo form_input($identity); ?>
    </p>

    <p>
        <?php echo lang('login_password_label', 'password', array('class' => 'sr-only')); ?>
        <?php echo form_input($password); ?>
    </p>

    <div>
        <label>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            <?php echo lang('login_remember_label')?>
            <!--<?php //echo lang('login_remember_label', 'remember'); ?>-->
        </label>
        <a class="pull-right" href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
    </div>

    <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-lg btn-primary btn-block"'); ?>

    <?php echo form_close(); ?>
</div>
