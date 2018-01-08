<?php
/**
 * Created by PhpStorm.
 * File: layout_login.php
 * User: Yuri
 * Date: 2017/12/20
 * Time: 1:40
 * Email: Yuri Young<yuri.young@qq.com>
 * @property ${NAME} $${NAME}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('common/header');
?>

<div class="container-fluid">
    <?php echo @$content_view; ?>
</div>
<!--/.container-->

<?php $this->load->view('common/footer'); ?>