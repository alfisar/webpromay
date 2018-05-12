<?php
class Desc_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Barang_M');
		$this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
    }
    public function index(){
        $sess_data = array(
                'logged_in' => "Sudah Login",
                'comment' => $this->input->get('idproduk', TRUE),
                'level' => "Customer"
            );
        $this->session->set_userdata($sess_data);
		$barang = $this->Barang_M->get_barang($this->input->get('idproduk', TRUE));
		$data = array('barang'=>$barang);
		$this->load->view('descriptionpage',$data);
    }
}
