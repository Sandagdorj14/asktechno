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

	public function contracts() {
		$inputs = json_decode(file_get_contents('php://input'), true);
		if(isset($inputs['mac_address'])){
			$mac_address = $inputs['mac_address'];
			$result = $this->license_model->get_contracts();
			echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		}
	}
}