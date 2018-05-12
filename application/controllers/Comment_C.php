<?php
class Comment_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Barang_M');
        $this->load->model('Comment_M');
		$this->load->helper('url');
    }
    public function index(){
        $idproduk1 = $this->session->userdata('comment');
		$barang = $this->Barang_M->get_barang($idproduk1);
        $cmt = $this->Comment_M->cmt( $idproduk1 );
		$data = array(
            'barang'=>$barang,
            'comment'=>$cmt
            );
		$this->load->view('commentpage',$data);
    }
    public function comment(){
        $data = $this->input->post(null,TRUE);
        $insert = $this->Comment_M->comment($data);
        redirect('Comment_C/index');
    }

}
