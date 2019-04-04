<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('url');
		$this->load->model('authentication');
		// $this->load->database();
	}

	public function index() {
		$this->load->view('user/login');
	}

	public function signup() {
		if (!isset($_POST['email'])) {
			$this->load->view('user/login');
			return;
		}

		$data['name'] = $_POST['name'];
		$data['email'] =  $_POST['email'];
		$data['phone'] =  $_POST['phone'];
		$data['college'] =  $_POST['college'];
		$data['status'] =  'ACTIVE';
		$data['role'] =  'REGULAR';
		$data['regd_on'] = date("Y-m-d H:i:s");
		$data['level'] = 0;

		$result = $this->authentication->signup($data);

		if ($result['signup_status'] == 'ALREADY REGD') {
			echo "0";
			return True;
		}

		$this->session->set_userdata($result);
		// redirect('problem', 'location');
		echo 1;
		return True;
	}

	public function login() {
		if (!isset($_POST['email'])) {
			$this->load->view('user/login');
			return;
		}

		$data['email'] =  $_POST['email'];
		$data['phone'] =  $_POST['password'];

		$result = $this->authentication->login($data);

		if ($result['login_status'] == 'LOGIN FAILED') {
			// echo "Login Failed. Try again.";
			echo 0;
			return True;
		}

		$this->session->set_userdata($result);
		// redirect('problem', 'location');
		echo 1;
		return True;
	}
}
