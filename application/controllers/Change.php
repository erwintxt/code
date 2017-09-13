<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Change extends CI_Controller {
  function __construct(){
    parent::__construct();

  }
  public function index()
   {
     if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
    {
                        $d['company'] = $this->config->item('company');
                        $d['credit'] = $this->config->item('credit');
                        $d['alamat'] = $this->config->item('alamat');
                        $d['telepon'] = $this->config->item('telepon');
                         $this->load->view('layout/header',$d);
                         $this->load->view('formchange',$d);
                         $this->load->view('layout/footer',$d);
    }
    else
    {
      header('location:/login');
    }

  }


	public function post()
	{
        $d['company'] = $this->config->item('company');
        $this->form_validation->set_rules('oldpassword', 'oldpassword', 'trim|required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|max_length[20]|matches[password-confirmation]');
				$this->form_validation->set_rules('password-confirmation', 'password-confirmation ', 'trim|required');

				if ($this->form_validation->run() == FALSE)
					{
                $d['company'] = $this->config->item('company');
                $d['credit'] = $this->config->item('credit');
                $d['alamat'] = $this->config->item('alamat');
                $d['telepon'] = $this->config->item('telepon');
                 $this->load->view('layout/header',$d);
                 $this->load->view('formchange',$d);
                 $this->load->view('layout/footer',$d);
					}else{
              $this->load->model('user_model');
               $id = $this->session->userdata('id');
							 $hasil = $this->user_model->datauserwhere("user", array('id' => $id));
	             if ($hasil >= 1){
                          foreach($hasil as $data){
                            $cek_password = $data->password;
                          };
                          if ($cek_password== md5($this->input->post("oldpassword"))){
                              $update['password'] = md5($this->input->post("password"));
                              $hasil2 = $this->user_model->updatedatauser("user",$update,array('id' => $id));
                              if ($hasil2 >= 1){
                                $this->session->set_flashdata('pesan','Password Telah diganti Bro');
   	                            header('location:/change');
                              }else{
                                $this->session->set_flashdata('pesan','Ganti Password Gagal Bro');
      	                        header('location:/change');
                              }
                          }else{
                            $this->session->set_flashdata('pesan','Password lama tidak sesuai Bro');
   	                        header('location:/change');
                          }
	             }else{
	                  	$this->session->set_flashdata('pesan','Ganti Password Gagal Bro');
	                   header('location:/change');
	              }
					}
	}

}
