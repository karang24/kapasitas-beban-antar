<?php
class M_login extends CI_Model{
	function __construct(){
		parent::__construct()
		;
	}
    var $table = "tb_user";
	
	function getLogin($user,$pass){
		$sql="select * from tb_user where username ='$user' and password ='$pass' LIMIT 1";
		//echo $sql; exit;
		return $this->db->query($sql);
	}

	function cek_user($data){
		$query = $this->db->get_where('tb_user',$data);
		return $query;
	}	
}
?>