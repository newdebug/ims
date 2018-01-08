<?php
/**
 * Created by PhpStorm.
 * File: sidebar.php
 * User: Yuri
 * Date: 2017/12/19
 * Time: 2:33
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */
?>

<nav class="sidebar-nav">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">

        <div class="panel panel-default">
<!--            <div class="">-->
<!--                <form class="search form-inline">-->
<!--                    --><?php //echo form_input($sidebar_search); ?>
<!--                </form>-->
<!--            </div>-->
            <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
                <h4 class="panel-title">
                    <i class="fa fa-dashboard"></i> <?php echo lang('nav_dashboard_label'); ?>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse <?php echo @$collapse_one;?>" role="tabpanel" aria-labelledby="headingOne">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo anchor(site_url('dashboard'), lang('nav_overview_label')); ?></li>
                    <li class="list-group-item"><?php echo anchor(site_url('dashboard/notice'), lang('nav_notice_label')); ?></li>
                </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
                <h4 class="panel-title">
                    <i class="fa fa-address-book"></i> <?php echo lang('nav_users_label'); ?>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse <?php echo @$collapse_two;?>" role="tabpanel" aria-labelledby="headingTwo">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo anchor(site_url('auth/user_list'), lang('nav_users_list_label')); ?></li>
                    <li class="list-group-item"><?php echo anchor(site_url('auth/create_user'), lang('nav_users_create_user_label')); ?></li>
                    <li class="list-group-item"><?php echo anchor(site_url('auth/create_group'), lang('nav_users_create_group_label')); ?></li>
                    <li class="list-group-item"><?php echo anchor(site_url('auth/personal'), lang('nav_users_personal_label')); ?></li>
                </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
                <h4 class="panel-title">
                    <i class="fa fa-users"></i> <?php echo lang('nav_customers_label'); ?>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse <?php echo @$collapse_three;?>" role="tabpanel" aria-labelledby="headingThree">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo anchor(site_url('customer'), lang('nav_customer_list_label')); ?></li>
                    <li class="list-group-item"><?php echo anchor(site_url('customer/create'), lang('nav_customer_create_label')); ?></li>
                </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
                <h4 class="panel-title">
                    <i class="fa fa-id-card"></i> <?php echo lang('nav_bills_label'); ?>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse <?php echo @$collapse_four;?>" role="tabpanel" aria-labelledby="headingFour">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo anchor(site_url('loanbill'), lang('nav_bill_list_label')); ?></li>
                    <li class="list-group-item"><?php echo anchor(site_url('loanbill/create'), lang('nav_bill_create_label')); ?></li>
                </ul>
            </div>
        </div>

    </div>
</nav>