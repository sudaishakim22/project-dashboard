<?php 

class LoginModel extends CI_Model{	
	function checkLogin($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}

?>