<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	<?php echo link_tag('assets/bootstrap/css/bootstrap.min.css', 'stylesheet', 'text/css'); ?>
	<?php echo link_tag('assets/css/datatables/dataTables.bootstrap.css', 'stylesheet', 'text/css'); ?>
	<?php echo link_tag('assets/custom.css', 'stylesheet', 'text/css'); ?>
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.reload.js" type="text/javascript"></script>
</head>
<body>