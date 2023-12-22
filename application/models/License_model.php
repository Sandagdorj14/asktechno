<?php 
date_default_timezone_set('Asia/Ulaanbaatar');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class license_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->dbmysql = $this->load->database('default', true);
	}
	
	function get_contracts() {
		$sql = "SELECT * FROM contracts";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$query->free_result();
		return $result;
	}
	
}
