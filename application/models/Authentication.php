<?php

class Authentication extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  // return user details and regn_status (LOGIN | SIGNUP)
  public function signup($data = array()) {

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where(array('email'=>$data['email']));
    $query = $this->db->get();

    $noOfRows = $query->num_rows();

    if($noOfRows > 0){ //already regd
      $result = $query->row_array();
      $result['signup_status'] = 'ALREADY REGD';
    } else{
      $this->db->insert('users',$data);

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where(array('email'=>$data['email']));
      $query = $this->db->get();

      $result = $query->row_array();
      $result['signup_status'] = 'REGD';
    }
    return $result;
  }

  public function login($data = array()) {

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($data);
    $query = $this->db->get();

    $noOfRows = $query->num_rows();

    if($noOfRows > 0){ //already regd
      $result = $query->row_array();
      $result['login_status'] = 'LOGGED IN';
    } else{
      $result['login_status'] = 'LOGIN FAILED';
    }
    // var_dump($data);
    return $result;
  }

}
