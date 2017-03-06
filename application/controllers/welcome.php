<?php

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_welcome');
    }

    function index() {
        $data['record'] = $this->model_welcome->tampilkan_data();
        $this->load->view('welcome_message', $data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $nama       =   $this->input->post('nama_lengkap');
            $kategori   =   $this->input->post('pendidikan_terakhir');
            $harga      =   $this->input->post('jabatan');
            $data       = array('nama_lengkap'=>$nama,
                                'pendidikan_terakhir'=>$kategori,
                                'jabatan'=>$harga);
            $this->model_welcome->post($data);
            redirect('welcome');
        }
        else{
            $this->load->model('model_welcome');
            $data['welcome']=  $this->model_welcome->tampilkan_data()->result();
            //$this->load->view('barang/form_input',$data);
            $this->template->load('template','barang/form_input',$data);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */