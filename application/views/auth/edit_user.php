<div class="row">
    <?php echo form_open(uri_string(), 'class="form-horizontal col-md-4 col-md-offset-4"'); ?>

    <h1><?php echo lang('edit_user_heading'); ?></h1>
    <p><?php echo lang('edit_user_subheading'); ?></p>
    <div id="infoMessage"><?php echo $message; ?></div>

    <div class="form-group">
        <?php echo lang('edit_user_fname_label', 'first_name', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($first_name); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('edit_user_lname_label', 'last_name', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($last_name); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('edit_user_company_label', 'company', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($company); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('edit_user_phone_label', 'phone', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($phone); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('edit_user_password_label', 'password', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($password); ?>
            <span id="passwordHelpBlock1" class="help-block">
                <?php echo lang('edit_user_password_placeholder')?>
                <?php echo sprintf(lang('change_password_new_password_length_helper'), $min_password_length); ?>
            </span>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('edit_user_password_confirm_label', 'password_confirm', 'class="col-sm-3 control-label"'); ?>
        <div class="col-sm-9">
            <?php echo form_input($password_confirm); ?>
            <span id="passwordHelpBlock2" class="help-block"><?php echo lang('edit_user_password_confirm_placeholder')?></span>

        </div>
    </div>

    <?php if ($this->ion_auth->is_admin()): ?>

        <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
        <?php foreach ($groups as $group): ?>
            <label class="checkbox">
                <?php
                $gID = $group['id'];
                $checked = null;
                $item = null;
                foreach ($currentGroups as $grp)
                {
                    if ($gID == $grp->id)
                    {
                        $checked = ' checked="checked"';
                        break;
                    }
                }
                ?>
                <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
            </label>
        <?php endforeach ?>

    <?php endif ?>

    <?php echo form_hidden('id', $user->id); ?>
    <?php echo form_hidden($csrf); ?>

    <p><?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-lg btn-primary btn-block"'); ?></p>

    <?php echo form_close(); ?>
</div>