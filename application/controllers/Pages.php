<?php
    class Pages extends CI_Controller{

        public function __construct() {
 
            parent::__construct();
            $this->lang->load("information","japanese");
            $this->load->model('main_model');
        }
        
        function index() {
            $data["language_msg"] = $this->lang->line("nuur");
            $this->load->view('language_view', $data);
        }

        function jap() {
            $this->lang->load("information","japanese");
            $data['title'] = "Сусано Технологи ХХК | Нүүр хуудас";
            $data['products'] = $this->main_model->get_products();
            $data['employees'] = $this->main_model->get_employees();
            $this->load->view('pages/main', $data);
        }

        function mon() {
            $this->lang->load("information","mongolian");
            $data['title'] = "Сусано Технологи ХХК | Нүүр хуудас";
            $data['products'] = $this->main_model->get_products();
            $data['employees'] = $this->main_model->get_employees();
            $this->load->view('pages/main', $data);
        }

        public function view($page = 'home'){
            // if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //     show_404();
            // }

            $data['title'] = ucfirst($page);
            // $data['products'] = $this->main_model->get_products();
            // $data['employees'] = $this->main_model->get_employees();
            
            $this->load->view('pages/main', $data);
        }
        public function addsales($page = 'home'){
            // if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //     show_404();
            // }

            $data['title'] = ucfirst($page);
            // $data['employees'] = $this->main_model->get_employees();
            
            $this->load->view('pages/addsales', $data);
        }
        public function privacy_policy($page = 'home'){
            // if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //     show_404();
            // }

            $data['title'] = ucfirst($page);
            // $data['employees'] = $this->main_model->get_employees();
            
            $this->load->view('pages/privacy_policy', $data);
        }
        public function command($page = 'home'){
            // if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //     show_404();
            // }

            $data['title'] = ucfirst($page);
            $data['code'] = $this->input->get('code', TRUE);
            $res = json_encode($data);
            echo("<script>console.log($res);</script>");
            $this->load->view('pages/command', $data);
        }
        public function user($page = 'home'){
            // if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //     show_404();
            // }

            $data['title'] = ucfirst($page);
            // $data['products'] = $this->main_model->get_products();
            // $data['employees'] = $this->main_model->get_employees();
            
            $this->load->view('pages/user', $data);
        }

        public function ipadVersion() {
            header('Content-Type: application/json');
    		header("Access-Control-Allow-Methods: *");
    		header("Access-Control-Allow-Origin: *");
    		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    		ini_set('default_charset', 'UTF-8');
            $setting = $this->main_model->get_settings();
            echo json_encode($setting, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        public function send() {
            $this->load->config('email');
            $this->load->library('email');
            $from = 'no-reply@ask-techno.com';

            $email = $this->input->post('email');
            $to = 'info@ask-techno.com';
            $cc = 'g.batsuuri@ask-techno.com';
            $company_name = $this->input->post('company_name');
            $name = $this->input->post('name');
            $phone_number = $this->input->post('phone_number');
            $message = $this->input->post('message');
            $email_subject = "姓 名:  $name";
            $email_body = "あなたに新しい提案が来ました。\n\n"."詳細\n\n姓 名: $name\n\nメール: $email\n\n会社名: $company_name\n\n電話番号: $phone_number\n\nコメント欄: $message";
            $this->email->from($from, 'ASK-TECHNO');
            $this->email->to($to);
            $this->email->cc($cc);
            $this->email->subject($email_subject);
            $this->email->message($email_body);
            
                if ($this->email->send()) {
            echo 'Sent with success!';
                } else {
            show_error($this->email->print_debugger());
            }
        }

        public function admin($page = 'home') {
            if($this->session->userdata('username') != '') {
                redirect('pages/contracts');
            } else {
                $data['title'] = ucfirst($page);
                $this->load->view('admin/login', $data);
            }
        }
        
        function admin_login() {  
            $this->load->library('form_validation');  
            $this->form_validation->set_rules('username', 'Username', 'required');  
            $this->form_validation->set_rules('password', 'Password', 'required');  
            if($this->form_validation->run())  
            {  
                    $username = $this->input->post('username');  
                    $password = $this->input->post('password');  
                    $this->load->model('main_model');  
                    if($this->main_model->admin_login($username, $password)) {
                        $session_data = array(  
                            'username' => $username  
                        );
                        $this->session->set_userdata($session_data);
                        redirect('pages/contracts');
                    } else {
                        $this->session->set_flashdata('error', 'Invalid Username and Password');
                        redirect('pages/admin');  
                    }  
            } else {  
                redirect('pages/admin');
            }  
        }
        
        function admin_logout()  
        {  
            $this->session->unset_userdata('username');
            redirect('pages/admin');
        }

        public function contracts($page = 'home'){
            if($this->session->userdata('username') != '') {
                $data['title'] = ucfirst($page);
                $data['contracts'] = $this->main_model->get_contracts();
                $this->load->view('admin/contracts', $data);
            } else {
                redirect('pages/admin');
            }
        }
        public function logs($page = 'home'){
            if($this->session->userdata('username') != '') {
                $data['title'] = ucfirst($page);
                $data['logs'] = $this->main_model->get_logs();
                $this->load->view('admin/logs',  $data);
            } else {
                redirect('pages/admin');
            }
        }
        
        public function users($page = 'home'){
            if($this->session->userdata('username') != '') {
                $data['title'] = ucfirst($page);
                $data['users'] = $this->main_model->get_joindata();
                $this->load->view('admin/users', $data);
            } else {
                redirect('pages/admin');
            }
        }

        public function contract($page = 'home'){
            if($this->session->userdata('username') != '') {
                $data['title'] = ucfirst($page);
                $this->load->view('admin/contract_create', $data);
            } else {
                redirect('pages/admin');
            }
        }

        public function contract_create(){
            if(!empty($this->input->post('Company_name'))&& !empty($this->input->post('email')) && !empty($this->input->post('password'))&& !empty($this->input->post('expired_date')) && !empty($this->input->post('license_count'))){
                $email = $this->input->post('email');
                $is_registrated = $this -> main_model->check_registrated($email);
                if($is_registrated == 1){
                    $password = $this->input->post('password');
                    $license_count = $this->input->post('license_count');
                    $expired_date = $this->input->post('expired_date'); 
                    $company_name = $this->input->post('Company_name');
                    $this->load->model('main_model');
                    $this->main_model->contractInsert( $company_name,$email, $password, $license_count, $expired_date);
                    redirect('pages/contracts');
                }
                else{
                    $this->load->view('admin/contract_create');
                }
            }
            else{
                $this->load->view('admin/contract_create');
            }
        }

        public function contract_update($page = 'home'){
            if (!empty($this->input->post('id'))) {
                $id = $this->input->post('id');
                $license_count = $this->input->post('license_count');
                $expired_date = $this->input->post('expired_date');
                $this->main_model->contractUpdate($id, $license_count, $expired_date);
                redirect('pages/contracts');
            } elseif(!empty($this->input->get('id'))) {
                $data['contract'] = $this->main_model->getById($this->input->get('id'))[0];
                $this->load->view('admin/contract_update', $data);
            } else {
                redirect('pages/contracts');
            }
        }
        public function contract_delete(){
            if(!empty($this->input->get('id'))) {
                $id = $this->input->get('id');
                $this->main_model-> deletecontract($id);
                redirect('pages/contracts');
            }
        }
    }
