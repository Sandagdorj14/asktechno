<?php 
date_default_timezone_set('Asia/Ulaanbaatar');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class license_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->dbmysql = $this->load->database('default', true);
	}
	function checklogs($mac_address)
	{
		$sql = "SELECT * FROM logs WHERE macid	 = '$mac_address'";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$date2 = date('Y-m-d H:i:s');
		if(!empty( $result))
		{
			$data= array(
				'macid' => $mac_address,
				'log_time' => $date2 ,
			);
			$this->dbmysql->where('macid', $mac_address);
			$this->dbmysql->update('logs',$data);
			return 1;
		}
		else {
			$data= array(
				'macid' => $mac_address,
				'log_time' => $date2 ,
			);
			$this->dbmysql->insert('logs',$data);
			return 0;
		}
	}
	function get_activate($mac_address) {
		$sql = "SELECT * FROM macaddress WHERE macid = '$mac_address'";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$query->free_result();
		return $result;
	}
	function get_activate_check($mac_address, $email) {
		$sql = "SELECT * FROM macaddress WHERE macid = '$mac_address' && user_email = '$email'";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$query->free_result();
		return $result;
	}
	function check_contracts($domain) {
		$sql = "SELECT * FROM contracts WHERE email LIKE '%$domain' && type = 'user'";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$query->free_result();
		return $result;
	}
	function get_registration_users($domain) {
		$sql = "SELECT * FROM macaddress WHERE user_email LIKE '%$domain'";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$query->free_result();
		return $result;
	}
	function entry_ablefalse($macid, $entry) 
	{
		$data = array(
			'entry_flg' =>  $entry,
		);
		$this->dbmysql->where('macid', $macid);
		$this->dbmysql->update('macaddress',$data);
		return 1;
	}
	function entry_able($domain,  $macid, $entry, $checkVal) {
		$registration_company =  $this->license_model->check_contracts($domain); 
		$company_users = $this->license_model->get_registration_users($domain);
		if(!empty($registration_company) &&$registration_company[0]['delete_flg'] ==0){
			$date1 = $registration_company[0]['expired_date'];
			$date2 = date('Y-m-d H:i:s');
			$dateTimestamp1 = strtotime($date1); 
			$dateTimestamp2 = strtotime($date2); 
			if($dateTimestamp1> $dateTimestamp2)
			{
				if(!empty( $company_users)){
					$count = 0;
					foreach($company_users as $row => $innerArray)
					{
						$count =$count + $innerArray['entry_flg'];
					}
					if($checkVal == 1)
					{
						$count = $count -1;
					}
					if($count <$registration_company[0]['license_count'])
					{
						$data = array(
							'entry_flg' =>  $entry,
						);
						$this->dbmysql->where('macid', $macid);
						$this->dbmysql->update('macaddress',$data);
						return 1;
					}
					else
					{
						return 0;
					}
				}
			
				else{
					$data = array(
						'entry_flg' =>  $entry,
					);
					$this->dbmysql->where('macid', $macid);
					$this->dbmysql->update('macaddress',$data);
					return 1;
				}
			}
		   else{
			   return -2;
		   }
		}
		else{
			return -1;
		}
	}
	public function insert_user($company_id, $macid, $email,$is_activate, $entry,$user_name){
		$is_registrated =$this-> get_activate($macid);
		if(!empty($is_registrated))
		{
			$data = array(
				'company_id' => $company_id,
				'macid' => $macid,
				'user_email' => $email,
				'is_activate' => $is_activate,
				'entry_flg' => $entry,
				'user_name' =>$user_name,
			);
			$this->dbmysql->where('macid', $macid);
			$this->dbmysql->update('macaddress',$data);
			return 1;
		}
		else{
			$data = array(
				'company_id' => $company_id,
				'macid' => $macid,
				'user_email' => $email,
				'is_activate' => $is_activate,
				'entry_flg' => $entry,
				'user_name' =>$user_name,
			);
			$this->dbmysql->insert('macaddress',$data);
			return 1;
		}
	}
	public function activate($macid, $email){
		$data = array(
			'macid' =>  $macid,
			'user_email' => $email,
			'is_activate' => 1,
		);
		$this->dbmysql->where('macid', $macid);
		$this->dbmysql->update('macaddress',$data);
	}
}
