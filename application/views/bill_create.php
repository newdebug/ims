<?php
/**
 * Created by PhpStorm.
 * File: bill_create.php
 * User: Yuri
 * Date: 2017/12/25
 * Time: 22:27
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */
?>


<h1><?php echo lang('bill_create_heading');?></h1>
<p><?php echo lang('bill_create_subheading');?></p>
<hr>
<div id="infoMessage"><?php echo $message; ?></div>

<div class="row">
    <?php echo form_open("loanbill/create", 'class="form-horizontal col-md-8"'); ?>

    <div class="form-group">
        <?php echo lang('bill_create_borrow_customer_label', 'borrow_customer', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($borrow_customer); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('bill_create_borrow_amount_label', 'borrow_amount', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($borrow_amount); ?>
        </div>
        <?php echo lang('bill_create_repay_amount_label', 'repay_amount', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_input($repay_amount); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('bill_create_borrow_on_label', 'borrow_amount', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <div class="input-group date form_datetime">
                <?php echo form_input($borrow_on); ?>
                <span class="input-group-addon"><i class="fa fa-remove fa-times"></i></span>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
        </div>
        <?php echo lang('bill_create_repay_on_label', 'repay_amount', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <div class="input-group date form_datetime">
                <?php echo form_input($repay_on); ?>
                <span class="input-group-addon"><i class="fa fa-remove fa-times"></i></span>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?php echo lang('bill_create_bill_status_label', 'bill_status', 'class="col-sm-2 control-label"'); ?>
        <div class="col-sm-4">
            <?php echo form_dropdown($bill_status, $status_selects); ?>
        </div>
    </div>

    <div class="">
        <?php echo form_submit('submit', lang('bill_create_submit_btn'),
            'class="btn btn-primary btn-block"'); ?>
    </div>
    <?php echo form_close(); ?>
</div>
