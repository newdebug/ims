<div class="row">

    <?php echo form_open("auth/deactivate/" . $user->id, 'class="col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('deactivate_heading'); ?></h1>
    <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>

    <div class="radio">
        <label>
            <input type="radio" name="confirm" value="yes" checked="checked"/>
            <?php echo lang('deactivate_confirm_y_label'); ?>
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="confirm" value="no"/>
            <?php echo lang('deactivate_confirm_n_label'); ?>
        </label>
    </div>

    <?php echo form_hidden($csrf); ?>
    <?php echo form_hidden(array('id' => $user->id)); ?>

    <?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-lg btn-primary btn-block"'); ?>

    <?php echo form_close(); ?>
</div>