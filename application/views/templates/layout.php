<?php
/**
 * Created by PhpStorm.
 * File: layout.php
 * User: Yuri
 * Date: 2017/12/16
 * Time: 19:53
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<!--Main layout-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <?php echo @$sidebar; ?>
        </div>
        <div class="col-md-10">
            <?php echo @$content_view; ?>
        </div>
    </div>
</div>
<!--/.container-->

<?php $this->load->view('common/footer'); ?>