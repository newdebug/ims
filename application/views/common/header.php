<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Your site content">
    <title><?php echo @$page_title . ' - ' . @$site_title . ' | ' . @$site_subtitle; ?></title>

    <!-- Font Awesome -->
    <link href="<?php echo site_url('assets/css/font-awesome.css');?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo site_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/plugins/datetimepicker/css/bootstrap-datetimepicker.css');?>" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/plugins/fileinput/css/fileinput.css')?>">
    <link href="<?php echo site_url('assets/css/style.css?v=' ) . uniqid( 'my_' ); ?>" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo site_url('assets/js/html5shiv.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/respond.min.js');?>"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo site_url('assets/js/jquery-3.1.1.js');?>"></script>
</head>
<body>
