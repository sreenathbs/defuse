<?php

class Qa extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->library('session');
  }

  // return user details and regn_status (LOGIN | SIGNUP)
  public function log_trial($data = array()) {

    return $this->db->insert('trials',$data);

  }

  public function get_next_question($level) {

    $this->db->select('question,title,answer');
    $this->db->from('qa');
    $this->db->where(array('level'=>$level));
    $query = $this->db->get();
    $result = $query->row_array();

    if(isset($result['question'])) {
      $this->session->set_userdata($result);
    }
    unset($result['answer']);
    return $result;
  }

  public function get_answer($level) {

    $this->db->select('answer');
    $this->db->from('qa');
    $this->db->where(array('level'=>$level+1));
    $query = $this->db->get();
    $result = $query->row_array();

    $this->session->set_userdata($result);

    // var_dump($data);
    return $result['answer'];
  }

  public function level_up() {
    $this->db->where('id', $this->session->userdata('id'));
    // $this->db->where_not_in('status', "TERMINATED");
    $this->db->set('level', 'level+1', FALSE);
    $this->db->update('users');

    $level = $this->session->userdata('level');
    $this->session->set_userdata('level',$level+1);
    return true;
  }

}
