<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		
	}
	public function register_model(){
		$input_user = $this->input->post('username-reg',true);
		$this->db->where('username_user', $input_user);
		$query = $this->db->get('user')->row();

		if(!$query){
			$data_user = [
				'username_user' => $this->input->post('username-reg',true),
				'nama_user' => $this->input->post('nama-reg',true),
				'hp_user' => $this->input->post('hp-reg',true),
				'email_user' => $this->input->post('email-reg',true),
				'password_user' => password_hash($this->input->post('pass-reg',true), PASSWORD_DEFAULT)

			];
			if($this->db->insert('user',$data_user)){
				$_SESSION['username'] = $this->input->post('username-reg',true);
				$this->db->where('username_user', $_SESSION['username']);
				$querys = $this->db->get('user')->row();
				
				$_SESSION['id_user'] = $querys->id_user;
				$_SESSION['a'] = 0;
				return true;
			}
		}else{
			return false;
		}
	}
	
	public function login_model(){
		$username = $this->input->post('username-log', true);
		$password = $this->input->post('pass-log', true);
		$this->db->where('username_user', $username);
		$query = $this->db->get('user')->row();
		if (!$query) return false;
		$hash = $query->password_user;
		if (!password_verify($password, $hash)) return false;

      // Update last_login user
		$_SESSION['id_user'] = $query->id_user;
		$_SESSION['username'] = $this->input->post('username-log',true);
		$_SESSION['a'] = 0;
      // Jika username dan password benar maka return data user
		return true;    
	}
}