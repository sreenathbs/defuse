<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('url');
		$this->load->model('authentication');

		// echo $this->router->fetch_method() != 'logout';
		// return;
		if(!is_null($this->session->userdata('email')) && $this->router->fetch_method() != 'logout') {
			echo 0;
			redirect('problem', 'location');
			return;
		}
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

	public function logout() {
	  // $user_history['user_id'] = $this->session->userdata('id');
	  // $user_history['type'] = "LOGOUT";
	  // $user_history['date'] = date("Y-m-d H:i:s");
	  // $user_history['current_level'] = "0";
	  // $user_history['ip'] = $_SERVER['REMOTE_ADDR'];
		//
	  // $this->history->log_user_activity($user_history);

	  // Remove user data from session
	  $this->session->unset_userdata('email');
	  // $this->session->unset_userdata('profile_picture');

	  // Check if session deleted
	  // echo $this->session->userdata('email');

	  // Redirect to login page
	  redirect('login');
  }
}
