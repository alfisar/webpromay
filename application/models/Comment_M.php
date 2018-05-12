<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Comment_M extends CI_Model{
	public function cmt($data){
			$this->db->where('idproduk',$data);
			$query = $this->db->get('comment');
			return $query->result();
		}	
	public function comment($data){
			if ($this->session->userdata('username')!==null) {
				$user = $this->session->userdata('username');
			}
			else{
				$user = "Unkown";
			}
			$param = array(
				"idproduk" => $this->session->userdata('comment'),
				"user" => $user,
				"comment" => $data['cmtUser']
			);
				$insert = $this->db->insert('comment', $param);
				if ($insert){
					return TRUE;
				}else{
					return FALSE;
				}
			}	
}
?>