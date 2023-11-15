<?php

class main_model extends CI_model {

    function __construct()
	{
		parent::__construct();
		$this->dbmysql = $this->load->database('default', true);
	}

    public function get_products(){
        $query = $this->dbmysql->get('products');
        return $query->result();
    }

    public function get_employees(){
        $query = $this->dbmysql->get('employees');
        return $query->result();
    }

    function can_login($username, $password){
        $this->dbmysql->where('username', $username);
        $this->dbmysql->where('password', $password);
        $query = $this->dbmysql->get('admin');
        
        if($query->num_rows() > 0){
            return true;
        }
        else {
            return false;
        }
    }
    function admin(){
        return $this->dbmysql->get('products');
    }

    function insert ($param){
        $field=array(
            'type'=>$param['p_type'],
            'title'=>$param['p_title'],
            'image'=>$param['p_image'],
            'descr'=>$param['p_descr'],
            'product_date'=>$param['p_date'],
        );
        $this->dbmysql->insert("products", $field);
    }
    
    public function get_settings(){
        $query = $this->dbmysql->get('settings');
        return $query->result();
    }

    
    public function get_contracts(){
        $query = $this->dbmysql->get('contracts');
        return $query->result();
    }

    function admin_login($username, $password){
        $this->dbmysql->where('email', $username);
        $this->dbmysql->where('password', $password);
        $query = $this->dbmysql->get('contracts');
        
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    function contractInsert($email, $password, $license_count, $expired_date) {
        $data = array(
            'email' => $email,
            'password' => $password,
            'license_count' => $license_count,
            'expired_date' => $expired_date,
            'type' => 0
        );

        $this->dbmysql->insert('contracts',$data);
    }
}
?>