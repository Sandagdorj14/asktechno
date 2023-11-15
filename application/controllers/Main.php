<?php
    class Main extends CI_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model('main_model');
        }

        function index() {
            $data['title'] = "";           
            
            $this->load->view("login", $data);
        }



        function login()  
      {  
           
           $data['title'] = 'Admin';  
           $this->load->view("login", $data);  
      }  
      function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('main_model');  
                if($this->main_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'main/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'main/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {     
               redirect('examples');             
                $this->load->model('main_model');
                $result=$this->main_model->admin();
                $data=array('products'=>$result);
                $this->load->view("user",$data);
           }  
           else  
           {  
                redirect(base_url() . 'main/login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'main/login');  
      }  
        
    }
?>