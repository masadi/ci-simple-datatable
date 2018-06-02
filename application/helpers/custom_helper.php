<?php
ini_set('max_execution_time', 0); 
ini_set('memory_limit', '-1'); 
function test($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
function get_start() {
	$start = 0;
	if (isset($_GET['iDisplayStart'])) {
		$start = intval($_GET['iDisplayStart']);
		if ($start < 0)
			$start = 0;
	}
	return $start;
}
function get_rows() {
	$rows = 10;
	if (isset($_GET['iDisplayLength'])) {
		$rows = intval($_GET['iDisplayLength']);
		if ($rows < 5 || $rows > 500) {
			$rows = 10;
		}
	}
	return $rows;
}
function get_sort_dir() {
	$sort_dir = "ASC";
	$sdir = strip_tags($_GET['sSortDir_0']);
	if (isset($sdir)) {
		if ($sdir != "asc" ) {
			$sort_dir = "DESC";
		}
	}
	return $sort_dir;
}