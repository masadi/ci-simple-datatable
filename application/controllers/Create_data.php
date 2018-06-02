<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_data extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('data_model', 'data'); 
	}
	public function index(){
		$data = array(
			1 => array("Trident", "Internet Explorer 4.0", "Win 95+", "4", "X"),
			2 => array("Trident", "Internet Explorer 5.0", "Win 95+", "5", "C"),
			3 => array("Trident", "Internet Explorer 5.5", "Win 95+", "5.5", "A"),
			4 => array("Trident", "Internet Explorer 6", "Win 98+", "6", "A"),
			5 => array("Trident", "Internet Explorer 7", "Win XP SP2+", "7", "A"),
			6 => array("Trident", "AOL browser (AOL desktop)", "Win XP", "6", "A"),
			7 => array("Gecko", "Firefox 1.0", "Win 98+ / OSX.2+", "1.7", "A"),
			8 => array("Gecko", "Firefox 1.5", "Win 98+ / OSX.2+", "1.8", "A"),
			9 => array("Gecko", "Firefox 2.0", "Win 98+ / OSX.2+", "1.8", "A"),
			10 => array("Gecko", "Firefox 3.0", "Win 2k+ / OSX.3+", "1.9", "A"),
			11 => array("Gecko", "Camino 1.0", "OSX.2+", "1.8", "A"),
			12 => array("Gecko", "Camino 1.5", "OSX.3+", "1.8", "A"),
			13 => array("Gecko", "Netscape 7.2", "Win 95+ / Mac OS 8.6-9.2", "1.7", "A"),
			14 => array("Gecko", "Netscape Browser 8", "Win 98SE+", "1.7", "A"),
			15 => array("Gecko", "Netscape Navigator 9", "Win 98+ / OSX.2+", "1.8", "A"),
			16 => array("Gecko", "Mozilla 1.0", "Win 95+ / OSX.1+", "1", "A"),
			17 => array("Gecko", "Mozilla 1.1", "Win 95+ / OSX.1+", "1.1", "A"),
			18 => array("Gecko", "Mozilla 1.2", "Win 95+ / OSX.1+", "1.2", "A"),
			19 => array("Gecko", "Mozilla 1.3", "Win 95+ / OSX.1+", "1.3", "A"),
			20 => array("Gecko", "Mozilla 1.4", "Win 95+ / OSX.1+", "1.4", "A"),
			21 => array("Gecko", "Mozilla 1.5", "Win 95+ / OSX.1+", "1.5", "A"),
			22 => array("Gecko", "Mozilla 1.6", "Win 95+ / OSX.1+", "1.6", "A"),
			23 => array("Gecko", "Mozilla 1.7", "Win 98+ / OSX.1+", "1.7", "A"),
			24 => array("Gecko", "Mozilla 1.8", "Win 98+ / OSX.1+", "1.8", "A"),
			25 => array("Gecko", "Seamonkey 1.1", "Win 98+ / OSX.2+", "1.8", "A"),
			26 => array("Gecko", "Epiphany 2.20", "Gnome", "1.8", "A"),
			27 => array("Webkit", "Safari 1.2", "OSX.3", "125.5", "A"),
			28 => array("Webkit", "Safari 1.3", "OSX.3", "312.8", "A"),
			29 => array("Webkit", "Safari 2.0", "OSX.4+", "419.3", "A"),
			30 => array("Webkit", "Safari 3.0", "OSX.4+", "522.1", "A"),
			31 => array("Webkit", "OmniWeb 5.5", "OSX.4+", "420", "A"),
			32 => array("Webkit", "iPod Touch / iPhone", "iPod", "420.1", "A"),
			33 => array("Webkit", "S60", "S60", "413", "A"),
			34 => array("Presto", "Opera 7.0", "Win 95+ / OSX.1+", "-", "A"),
			35 => array("Presto", "Opera 7.5", "Win 95+ / OSX.2+", "-", "A"),
			36 => array("Presto", "Opera 8.0", "Win 95+ / OSX.2+", "-", "A"),
			37 => array("Presto", "Opera 8.5", "Win 95+ / OSX.2+", "-", "A"),
			38 => array("Presto", "Opera 9.0", "Win 95+ / OSX.3+", "-", "A"),
			39 => array("Presto", "Opera 9.2", "Win 88+ / OSX.3+", "-", "A"),
			40 => array("Presto", "Opera 9.5", "Win 88+ / OSX.3+", "-", "A"),
			41 => array("Presto", "Opera for Wii", "Wii", "-", "A"),
			42 => array("Presto", "Nokia N800", "N800", "-", "A"),
			43 => array("Presto", "Nintendo DS browser", "Nintendo DS", "8.5", "C/A1"),
			44 => array("KHTML", "Konqureror 3.1", "KDE 3.1", "3.1", "C"),
			45 => array("KHTML", "Konqureror 3.3", "KDE 3.3", "3.3", "A"),
			46 => array("KHTML", "Konqureror 3.5", "KDE 3.5", "3.5", "A"),
			47 => array("Tasman", "Internet Explorer 4.5", "Mac OS 8-9", "-", "X"),
			48 => array("Tasman", "Internet Explorer 5.1", "Mac OS 7.6-9", "1", "C"),
			49 => array("Tasman", "Internet Explorer 5.2", "Mac OS 8-X", "1", "C"),
			50 => array("Misc", "NetFront 3.1", "Embedded devices", "-", "C"),
			51 => array("Misc", "NetFront 3.4", "Embedded devices", "-", "A"),
			52 => array("Misc", "Dillo 0.8", "Embedded devices", "-", "X"),
			53 => array("Misc", "Links", "Text only", "-", "X"),
			54 => array("Misc", "Lynx", "Text only", "-", "X"),
			55 => array("Misc", "IE Mobile", "Windows Mobile 6", "-", "C"),
			56 => array("Misc", "PSP browser", "PSP", "-", "C"),
			57 => array("Other browsers", "All others", "-", "-", "U"),
		);
		foreach($data as $d){
			$a['rendering_engine'] = $d[0];
			$a['browser'] = $d[1];
			$a['platform'] = $d[2];
			$a['engine_version'] = $d[3];
			$a['css_grade'] = $d[4];
			$result[] = $a;
		}
		$this->data->insert_many($result);
	}
}
