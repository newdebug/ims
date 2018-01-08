<?php
/**
 * Created by PhpStorm.
 * File: navbar.php
 * User: Yuri
 * Date: 2017/12/17
 * Time: 22:48
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('/')?>"><?php echo lang('nav_brand_label')?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <?php echo $current_user->last_name .' ' . $current_user->first_name . '(' . $current_user->username .')';?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><?php echo anchor("auth/change_password/".$current_user->id, lang('index_change_password_link')) ;?></li>
                        <li><?php echo anchor("auth/edit_user/".$current_user->id, lang('index_edit_user_link')) ;?></li>
                        <li role="separator" class="divider"></li>
                        <li><?php echo anchor("auth/logout", lang('index_logout_link')) ;?></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>