<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Profil extends CI_Controller {
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
                         $this->load->view('formprofil',$d);
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
				$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[3]|max_length[9]');
				$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[3]|max_length[100]');
				$this->form_validation->set_rules('telp', 'telp', 'trim|required|min_length[3]|max_length[15]');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email',
                array(
                'required'      => 'You have not provided %s.',
        ));

				if ($this->form_validation->run() == FALSE)
					{
                $d['company'] = $this->config->item('company');
                $d['credit'] = $this->config->item('credit');
                $d['alamat'] = $this->config->item('alamat');
                $d['telepon'] = $this->config->item('telepon');
                 $this->load->view('layout/header',$d);
                 $this->load->view('formprofil',$d);
                 $this->load->view('layout/footer',$d);
					}else{
              $this->load->model('user_model');
               $id = $this->session->userdata('id');
	             $update['name'] = $this->input->post("name");
							 $update['address'] = $this->input->post("address");
							 $update['telp'] = $this->input->post("telp");
							 //$update['password'] = md5($this->input->post("password"));
               //$update['created_at'] = date('Y-m-d H:i:s');
							 $hasil = $this->user_model->updatedatauser("user",$update,array('id' => $id));
	             if ($hasil >= 1){
           			       $newdata = array();
           				         $newdata['name'] = $this->input->post("name");
           				         $newdata['address'] = $this->input->post("address");
                           $newdata['telp'] = $this->input->post("telp");
                           $newdata['email'] = $this->input->post("email");
                           //$newdata['created_at'] = $data->created_at;
                           //$newdata['logged_in'] = 'yesGetMeLoginBaby';
                           //$newdata['stts'] = 'Administrator';

                      //$newdata = array(
                      //        'logged_in'  => 'yesGetMeLoginBaby',
                      //        'name'     => $this->input->post("name")
                      //);
                      $this->session->set_userdata($newdata);
                      $this->session->set_flashdata('pesan','Data Telah diganti Bro');
	                   header('location:/profil');
                     echo 'masuk';
	             }else{
	                  	$this->session->set_flashdata('pesan','Edit data Gagal Bro');
	                   header('location:/profil');
	              }
					}
	}

}
