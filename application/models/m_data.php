<?php
class M_data  extends CI_Model {
    function ambil_data(){
        return $this->db->get('ajuan_surat');
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }
}