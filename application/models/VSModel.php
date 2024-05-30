<?php
class VSModel extends CI_Model{

    public function cek_admin($u, $p){
        return $this->db->get_where('tbl_admin',array('username'=>$u, 'password'=>$p));
    }
}
?>