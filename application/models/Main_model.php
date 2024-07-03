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
        $this->dbmysql->where('type', "admin");
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
        $this->dbmysql->where('type',"user");
        $query = $this->dbmysql->get('contracts');
        return $query->result();
    }
   
    public function get_joindata(){
        $this->dbmysql->select ('*'); 
        $this->dbmysql->from ( 'macaddress' );
        $this->dbmysql->join ( 'contracts', 'contracts.id = macaddress.company_id' , 'left' );
        $query = $this->dbmysql->get ();
        return $query->result();
    }
    public function get_logs(){
        $query = $this->dbmysql->get('logs');
        return $query->result();
    }

    function admin_login($username, $password){
        $this->dbmysql->where('email', $username);
        $this->dbmysql->where('password', $password);
        $this->dbmysql->where('type',"admin");
        $query = $this->dbmysql->get('contracts');
        
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    function contractInsert($comp_name, $email, $password, $license_count, $expired_date) {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'company_name' => $comp_name,
            'email' => $email,
            'password' => $password,
            'license_count' => $license_count,
            'expired_date' => $expired_date,
            'insert_date'=> $today,
            'update_date'=> $today,
            'delete_flg'=> 0,
            'type'=> "user"
        );

        return $this->dbmysql->insert('contracts',$data);
    }
    function findcontract($email, $password)
    {
        $sql = "SELECT * FROM contracts WHERE email = '%$email' &&  password = '%$password'";
		$query = $this->dbmysql->query($sql);
		$result = $query->result_array();
		$query->free_result();
		return $result;
        $query = $this->dbmysql->find('contracts');
        return $query->result();
    }
    function check_registrated($email){
        $this->dbmysql->where('email', $email);
        $query = $this->dbmysql->get('contracts');
        if($query->num_rows() > 0){
            return 0;
        } else {
            return 1;
        }
    }
    function getById($id)
    {
        $this->dbmysql->where('id', $id);
        $query = $this->dbmysql->get('contracts');
        return $query->result();
    }

    function contractUpdate($id, $license_count, $expired_date)
    {
        $today = date('Y-m-d H:i:s');
        $data = array(
            'license_count' =>  $license_count,
            'expired_date' => $expired_date,
            'update_date'=> $today,
        );
        $this->dbmysql->where('id', $id);
        $this->dbmysql->update('contracts', $data);
    }
    function deletecontract($id)
    {
        $delete_flg = 0;
        $this->dbmysql->where('id', $id);
        $query = $this->dbmysql->get('contracts');
        $result = $query->result_array();
        if($result[0][ 'delete_flg'] ==0)
        {
            $delete_flg = 1;
        }
        $data = array(
            'delete_flg' =>$delete_flg
        );
        $this->dbmysql->where('id', $id);
        $this->dbmysql->update('contracts', $data);
    }
}
?>