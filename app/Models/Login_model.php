<?php
class Login_model extends CI_Model
{
	public function login_data($email, $pass){
         $query = $this->db->select('*')
                           ->from('login')
                           ->where(['username'=>$email,'password'=>$pass])
		                   ->get();
		 return $query->row();
	}
}
?>