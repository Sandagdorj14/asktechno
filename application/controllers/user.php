<?php
    class User extends CI_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model('main_model');
        }

        function index(){
            $this->load->model('main_model');
            $result=$this->main_model->admin();
            $data=array('products'=>$result);
            $this->load->view("user",$data);
        }

        function insert(){
            $type=Null;
            $name=Null;
            $image=Null;
            $description=Null;
            $date=Null;
            extract($_POST);
            $param['p_type']=$type;
            $param['p_title']=$name;
            $param['p_image']=$image;
            $param['p_descr']=$description;
            $param['p_date']=$date;
            if(isset($name)){
                $this->load->model('main_model');
                $result=$this->main_model->insert($param);
                redirect('main/enter');
            }
        }
    }
?>