<?php
class License extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		header('Content-Type: application/json');
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding, Origin, X-Auth-Token");
		ini_set('default_charset', 'UTF-8');
 		$this->load->model('license_model');
 		$this->load->helper("security");
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function is_registered_maccaddress() {
		$inputs = json_decode(file_get_contents('php://input'), true);
		if(isset($inputs['mac_address']) && $inputs['mac_address']!=""){
			$mac_address = $inputs['mac_address'];
			$this->license_model->checklogs($mac_address);
			$result = $this->license_model->get_activate($mac_address);
 			if (!empty($result)){
				$is_activated = $result[0]['is_activate'];
				echo json_encode(array("result"=>$is_activated));
			} else {
				echo json_encode(array("result"=>-1));
			}
		}
	}
	public function register_check() {
		$inputs = json_decode(file_get_contents('php://input'), true);
		if($inputs['mail'] && isset($inputs['password']) && $inputs['mail']!=""&& $inputs['password']!=""){
			$mail = $inputs['mail'];
			$password = $inputs['password'];
			$domain = explode("@",$mail);
			if(!empty($domain)){
				$registration_company =  $this->license_model->check_contracts($domain[1]); 
				if (!empty($registration_company)){
					//echo json_encode(array("result"=> $registration_company[0]));//['id']));
					$registrated_password = $registration_company[0]['password'];
					if($registrated_password == $password)
					{
						echo json_encode(array("result"=> $registration_company[0]['id']));
					}
					else
					{
						echo json_encode(array("result"=> 0));
					}
				} else {
					echo json_encode(array("result"=> 0));
				}
			}
			else {
				echo json_encode(array("result"=> 0));
			}
		}
	}
	public function is_entryable() {
		$inputs = json_decode(file_get_contents('php://input'), true);
		if(isset($inputs['mac_address'])&& $inputs['mac_address']!=""){
			$mac_address = $inputs['mac_address'];
			$result = $this->license_model->get_activate($mac_address);
			if (!empty($result)){
				$activated = $result[0]['is_activate'];
				if($activated == 1)
				{
				$mail = $result[0]['user_email'];
				$domain = explode("@",$result[0]['user_email']);
				$entry_flg = 1;
				$checked_result = $this->license_model->entry_able($domain[1], $mac_address, $entry_flg,  $result[0]['entry_flg']);
				echo json_encode(array('result' =>$checked_result, 'companyId' =>$result[0]['company_id']));
				}
				else
				{
				echo json_encode(array('result' =>3));
				}
			}
			else
			{
				echo json_encode(array('result' =>2));
			}
		}
	}

	public function nonentry() {
		$inputs = json_decode(file_get_contents('php://input'), true);
		if(isset($inputs['mac_address'])&& $inputs['mac_address']!=""){
			$mac_address = $inputs['mac_address'];
			$result = $this->license_model->get_activate($mac_address);
			if (!empty($result)){
				$entry_flg = 0;
				$checked_result = $this->license_model->entry_ablefalse($mac_address, $entry_flg);
				echo json_encode(array('result' =>$checked_result));
			}
			else
			{
				echo json_encode(array('result' =>2));
			}
		}
	}
	public function insert(){
		$inputs = json_decode(file_get_contents('php://input'), true);
		if(isset($inputs['mac_address'])&& isset($inputs['mail'])  && isset($inputs['company_id'])&& isset($inputs['user_name'])
		&& $inputs['mac_address']!=""&& $inputs['mail']!=""&& $inputs['company_id']!=""&& $inputs['user_name']!=""){
			$company_id = $inputs['company_id'] ;
			$email = $inputs['mail'] ;
			$macid = $inputs['mac_address'] ;
			$is_activate = 0;
			$entry_flg = 0;
			$user_name = $inputs['user_name'];
			$url = "https://www.ask-techno.com/mail/contact_me.php";
			$data = array('email' => $email, 'mac_address' => $macid); 
			$headers = array(
				"Content-Type: multipart/form-data"
			);
			$curlHandle = curl_init($url);
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POST, true);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			$curlRseponse = curl_exec($curlHandle);
			if (curl_error($curlHandle)) {
				$error_msg = curl_error($curlHandle);
			}
			if($curlRseponse == 'OK'){
				$inserted = $this->license_model->insert_user($company_id, $macid, $email,$is_activate, $entry_flg,$user_name);
				echo json_encode(array('result' =>"1"));
			}
			else
			{
				echo json_encode(array('result' =>"0"));
			}
		}
	}
	public function activate($email, $mac){
		header('Content-Type: text/html');
		if(!empty($email) && !empty($mac)){
			$email = substr($email, 0, strlen($email) - 3);
			$mac = substr($mac, 0, strlen($mac) - 3);
			$email = base64_decode($email);
			$mac = base64_decode($mac);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/[^a-z0-9 _]+/i', $mac)) {
				$this->load->view('admin/failed');
			} else {
				$activated = $this->license_model->get_activate_check($mac, $email);
				if(!empty($activated))
				{				
					$this->license_model->activate($mac, $email);
					$this->load->view('admin/activate');
				} else {
					$this->load->view('admin/failed');
				}
			}
		}
	}
	
}