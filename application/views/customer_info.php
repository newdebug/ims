<?php
/**
 * Created by PhpStorm.
 * File: customer_info.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 23:19
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */
?>

<h1><?php echo lang('customer_info_heading');?></h1>
<p><?php echo lang('customer_info_subheading');?></p>
<hr>
<div>
    <dl class="dl-horizontal">
        <dt><?php echo lang('customer_name_label');?></dt>
        <dd><?php echo @$name;?></dd>
        <dt><?php echo lang('customer_idcard_label');?></dt>
        <dd><?php echo @$idcard;?></dd>
        <dt><?php echo lang('customer_phone_label');?></dt>
        <dd><?php echo @$phone;?></dd>
        <dt><?php echo lang('customer_phone_code_label');?></dt>
        <dd><?php echo @$phone_code;?></dd>
        <dt><?php echo lang('customer_qq_label');?></dt>
        <dd><?php echo @$qq;?></dd>
        <dt><?php echo lang('customer_weixin_label');?></dt>
        <dd><?php echo @$weixin;?></dd>
        <dt><?php echo lang('customer_father_label');?></dt>
        <dd><?php echo @$father;?></dd>
        <dt><?php echo lang('customer_father_phone_label');?></dt>
        <dd><?php echo @$father_phone;?></dd>
        <dt><?php echo lang('customer_mother_label');?></dt>
        <dd><?php echo @$mother;?></dd>
        <dt><?php echo lang('customer_mother_phone_label');?></dt>
        <dd><?php echo @$mother_phone;?></dd>
        <dt><?php echo lang('customer_teacher_label');?></dt>
        <dd><?php echo @$teacher;?></dd>
        <dt><?php echo lang('customer_teacher_phone_label');?></dt>
        <dd><?php echo @$teacher_phone;?></dd>
        <dt><?php echo lang('customer_home_address_label');?></dt>
        <dd><?php echo @$home_address;?></dd>
        <dt><?php echo lang('customer_work_address_label');?></dt>
        <dd><?php echo @$work_address;?></dd>
        <dt><?php echo lang('customer_career_label');?></dt>
        <dd><?php echo @$career;?></dd>
        <dt><?php echo lang('customer_credit_level_label');?></dt>
        <dd><?php echo @$credit_level;?></dd>
        <dt><?php echo lang('customer_status_label');?></dt>
        <dd><?php echo @$status;?></dd>
        <dt><?php echo lang('customer_created_on_label');?></dt>
        <dd><?php echo @$created_on;?></dd>
        <dt><?php echo lang('customer_last_update_label');?></dt>
        <dd><?php echo @$last_update;?></dd>
        <dt><?php echo lang('customer_remark_label');?></dt>
        <dd><?php echo @$remark;?></dd>
        <dt><?php echo lang('customer_attachment_label');?></dt>
        <dd>
        <?php
            foreach ($attachment as $value)
            {
                echo '<img src="' . $value . '" alt="image" class="img-thumbnail">';
            }
        ?>
        </dd>
    </dl>

    <?php echo anchor(site_url('customer'), lang('action_back_label'), 'type="button" class="btn btn-default"')?>
</div>
