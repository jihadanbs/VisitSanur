<?php
defined('BASEPATH') OR exit('No direct script allowed');

    class VSController extends CI_Controller {

        function __construct(){

            parent::__construct();
            $this->load->model('VSModel');
        }
    
        public function index(){

            $this->load->view('VSCV/login');
        }
    
        public function aksi_login(){

            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            $cek = $this->VSModel->cek_admin($username,$password)->num_rows();
            if ($cek > 0){
                $data_session = array(
                    'nama'=> $username,
                    'status'=>"login"
                );
                $this->session->set_userdata($data_session);
                echo "Anda Telah Berhasil Login! <br> <br>";
                echo "Nama Anggota : <br>
                        <hr>
                        I Wayan Aditya Prayana Putra    21.12.1860 <br>
                        Jihadan Beckhianosyuhada        21.12.1862 <br>
                        Christian Gilbert Orno          21.12.1866 <br>
                        Rangga Aldi Rikardo             21.12.1882 <br>
                        Florensius Alanroa Cikita       21.12.1898";
            }else{
                echo "Username dan Password Salah!";
            }
        }
}
?>