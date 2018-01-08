<h1><?php echo lang('customer_list_heading'); ?></h1>
<p><?php echo lang('customer_list_subheading'); ?></p>
<hr>
<div id="toolbar">
    <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#customer_create_modal">
            <i class="fa fa-plus"></i>
            <?php echo lang('customer_create_heading'); ?>
        </button>
    </div>
</div>

<table id="customer_table"
       data-toggle="table"
       data-striped="true"
       data-pagination="true"
       pagination='true'
       data-toolbar="#toolbar"
       data-search="true"
       data-show-refresh="true"
       data-show-columns="true"
       data-sort-name="<?php echo lang('customer_created_on_label'); ?>"
       data-sort-order="desc">
    <?php
    if (isset($customers))
    {
        echo '<thead><tr class="success">';
        echo '<th data-sortable="true" data-field="id">#</th>';
        $headers = array_keys($customers[0]);
        foreach ($headers as $header)
        {
            if (in_array($header, $invisible_columns))
            {
                if (in_array($header, $disablesort_columns))
                    echo '<th data-visible="false">' . $header . '</th>';
                else
                    echo '<th data-visible="false" data-sortable="true" data-field="' . $header . '">' . $header . '</th>';
            } else
            {
                if (in_array($header, $disablesort_columns))
                    echo '<th>' . $header . '</th>';
                else
                    echo '<th data-sortable="true" data-field="' . $header . '">' . $header . '</th>';
            }
        }
        echo '</tr></thead>';

        echo '<tbody>';
        foreach ($customers as $n => $customer)
        {
            echo '<tr>';
            echo '<td>' . $n . '</td>';
            foreach ($customer as $key => $value)
            {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
    }
    ?>
</table>

<div class="modal fade" id="customer_create_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel"><?php echo lang('customer_create_heading'); ?></h4>
            </div>
            <div class="modal-body">
                <?php echo form_open("customer/create", 'class="form-horizontal"'); ?>

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
                    <?php echo lang('customer_create_attachment_label', 'customer_attachment', 'class="col-sm-2 control-label"'); ?>
                    <div class="col-sm-10">
                        <?php echo form_input($customer_attachment); ?>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"><?php echo lang('action_close_label'); ?></button>
                <button type="button" class="btn btn-default"><?php echo lang('action_submit_label'); ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="customer_create_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel"><?php echo lang('customer_create_heading'); ?></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal"><?php echo lang('action_close_label'); ?></button>
                <button type="button" class="btn btn-default"><?php echo lang('action_submit_label'); ?></button>
            </div>
        </div>
    </div>
</div>
