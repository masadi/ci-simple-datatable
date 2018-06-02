<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('data_model', 'data'); 
	}
	public function index(){
		$data['page_title'] = 'CI Datatable';
		$this->load->view('header', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('footer');
	}
	public function datatable(){
		$search = "";
		if (isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
			$search = strtolower($_GET['sSearch']);
		}
		$start = get_start();
		$rows = get_rows();
		$query = $this->data->find_all("id IS NOT NULL AND (lower(rendering_engine) LIKE '%$search%' OR lower(browser) LIKE '%$search%' OR lower(platform) LIKE '%$search%')", '*','id ASC', $start, $rows);
		$filter = $this->data->find_count("id IS NOT NULL AND (lower(rendering_engine) LIKE '%$search%' OR lower(browser) LIKE '%$search%' OR lower(platform) LIKE '%$search%')");
		$iFilteredTotal = count($query);
		
		$iTotal= $filter;
	    
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
	        "iTotalRecords" => $iTotal,
	        "iTotalDisplayRecords" => $iTotal,
	        "aaData" => array()
	    );

	    $i=$start + 1;
		$admin_group = array(1,2);
	    foreach ($query as $temp) {
			$record = array();
			$record[] = '<div class="text-center">'.$i.'</div>';
			$record[] = $temp->rendering_engine;
			$record[] = $temp->browser;
			$record[] = $temp->platform;
			$record[] = '<div class="text-center">'.$temp->engine_version.'</div>';
			$record[] = '<div class="text-center">'.$temp->css_grade.'</div>';
			$output['aaData'][] = $record;
			$i++;
		}
		// format it to JSON, this output will be displayed in datatable
		echo json_encode($output);
	}
}
