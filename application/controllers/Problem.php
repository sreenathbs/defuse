<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problem extends CI_Controller {

	function __construct() {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('url');
		$this->load->model('qa');
		// $this->load->database();
	}

	public function index() {
    // if (!isset($_POST['answer'])) {
			$this->load->view('user/problem');
			return;
		// }
    //
    // $answer = $_POST['answer'];
    // $data['input'] = $answer;
		// $data['user_id'] =  $this->session->userdata('id');
		// $data['level'] =  $this->session->userdata('level');
		// $data['time'] =  date("Y-m-d H:i:s");
		// $data['malicious'] =  0;
    //
    // $this->qa->log_trial($data);
    // $result = $this->qa->get_answer($data['level']);
    //
    // if ($result['answer_status'] && $result['answer'] == $answer) {
    //   $this->qa->level_up($this->session->userdata('id'));
    //   echo "Right Answer";
    // } else {
    //   echo "Wrong answer";
    //   return;
    // }

	}

  public function get_next_qn() {
    if (!is_null($this->session->userdata('question'))) {
      $qn = new stdClass();
      $qn->level = $this->session->userdata('level')+1;
      $qn->title = $this->session->userdata('title');
      $qn->question = $this->session->userdata('question');
      echo json_encode($qn);
      return True;
    }
    $result = $this->qa->get_next_question($this->session->userdata('level')+1);
    echo json_encode($result);
    return True;
	}

  public function verify_ans() {

    $answer = $_POST['answer'];
    $data['input'] = $answer;
		$data['user_id'] =  $this->session->userdata('id');
		$data['level'] =  $this->session->userdata('level');
		$data['time'] =  date("Y-m-d H:i:s");
		$data['malicious'] =  0;

    $this->qa->log_trial($data);

    if (!is_null($this->session->userdata('answer'))) {
      $correct_answer = $this->session->userdata('answer');
    } else {
      $correct_answer = $this->qa->get_answer($data['level']);
    }

    if ($correct_answer == $answer) {
      $this->qa->level_up();
      $this->session->unset_userdata('question');
      $this->session->unset_userdata('answer');
      echo 1;
      return True;
    } else {
      echo 0;
      return True;
    }
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
			echo "Already registered. Please login";
			return;
		}

		$this->session->set_userdata($result);
		redirect('problem', 'location');
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
			echo "Login Failed. Try again.";
			return;
		}

		$this->session->set_userdata($result);
		redirect('problem', 'location');
	}
}
