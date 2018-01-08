<?php
/**
 * Created by PhpStorm.
 * File: customer_create.php
 * User: Yuri
 * Date: 2017/12/25
 * Time: 10:12
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */
?>

<h1><?php echo lang('customer_create_heading'); ?></h1>
<p><?php echo lang('customer_create_subheading'); ?></p>
<hr>
<div id="infoMessage"><?php echo $message; ?></div>

<div class="container">
    <?php echo form_open("customer/create", 'id="form_create" class="form-horizontal"'); ?>

    <div class="form-group">
        <?php echo lang('customer_create_name_label', 'customer_name', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_name); ?>
        </div>
        <?php echo lang('customer_create_idcard_label', 'customer_idcard', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_idcard); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_phone_label', 'customer_phone', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_phone); ?>
        </div>
        <?php echo lang('customer_create_phone_code_label', 'customer_phone_code', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_phone_code); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_qq_label', 'customer_qq', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_qq); ?>
        </div>
        <?php echo lang('customer_create_weixin_label', 'customer_weixin', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_weixin); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_father_label', 'customer_father', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_father); ?>
        </div>
        <?php echo lang('customer_create_father_phone_label', 'customer_father_address', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_father_phone); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_mother_label', 'customer_mother', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_mother); ?>
        </div>
        <?php echo lang('customer_create_mother_phone_label', 'customer_mother_address', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_mother_phone); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_teacher_label', 'customer_teacher', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_teacher); ?>
        </div>
        <?php echo lang('customer_create_teacher_phone_label', 'customer_teacher_phone', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_teacher_phone); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_work_address_label', 'customer_work_address', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($customer_work_address); ?>
        </div>
        <?php echo lang('customer_create_career_label', 'customer_career', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_dropdown($customer_career, $career_selects); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo lang('customer_create_home_address_label', 'customer_home_address', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-10">
            <?php echo form_input($customer_home_address); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('customer_create_remark_label', 'customer_remark', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-10">
            <?php echo form_textarea($customer_remark); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo lang('customer_create_status_label', 'customer_status', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_dropdown($customer_status, $status_selects); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo lang('customer_create_attachment_label', 'customer_attachment', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-10">
            <div class="file-loading">
                <?php echo form_input($customer_attachment); ?>
            </div>
        </div>
    </div>

    <div class="pull-right">
        <button id="customer_create_submit" class="btn btn-lg btn-primary" type="button">
            <i class="fa fa-save"></i>
            <?php echo lang('action_submit_label'); ?>
        </button>
    </div>

    <?php echo form_close(); ?>
</div>