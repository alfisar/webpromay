<?php
class Billing_C extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
            $this->load->model('Billing_M');
            $this->load->model('Barang_M');
            $this->load->model('Profile_M');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('javascript');
            $this->load->library('javascript/jquery');
    }    
    public function index($idproduk)
    {
        $data = $this->session->userdata('username');
        $profile = $this->Profile_M->profile($data);
        $barang = $this->Barang_M->get_barang($idproduk);
        if($profile){
            $this->session->set_flashdata('data', 'ada');
            $data = array(
                    'barang'=>$barang,
                    'profile'=>$profile
                );
        }
        else{
            $this->session->set_flashdata('data', 'tidak');
            $data = array(
                    'barang'=>$barang
                );
        }
        $this->load->view('billingpage1',$data);
    }
    public function pesan()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->Billing_M->pesan($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_daftar');
            //isi dengan flash data disini
            redirect('Landing_C/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
        }

    }
    
}
