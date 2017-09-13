<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Login extends CI_Controller {
    public function index()
	   {
       //$this->load->model('cek_login_model');
       if($this->session->userdata('logged_in')=="")
         {
             $d['company'] = $this->config->item('company');
             $this->load->view('formlogin',$d);
          }
       else if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
         {
             header('location:/dashboard');
         }
       else if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Operator")
         {
              header('location:'.base_url().'dashboard_operator');
         }
       else if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Executive")
         {
              header('location:'.base_url().'dashboard_executive');
         }

	  }

    public function post()
  	{
          $d['company'] = $this->config->item('company');
  				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email',
                  array(
                  'required'      => 'You have not provided %s.'
          ));
  				$this->form_validation->set_rules('password', 'password', 'trim|required');

  				if ($this->form_validation->run() == FALSE)
  					{
  							$this->load->view('formlogin',$d);
  					}else{
                $this->load->model('user_model');
  							 $hasil = $this->user_model->datauserwhere("user", array('email' => $this->input->post("email")));
  	             if ($hasil >= 1){
                        //$query = $this->user_model->datauserwhere("user", array('email' => $this->input->post("email")));
             			       $newdata = array();
             			      foreach($hasil as $data)
             			        {
             				         $newdata['id'] = $data->id;
             				         $newdata['name'] = $data->name;
             				         $newdata['address'] = $data->address;
                             $newdata['telp'] = $data->telp;
                             $newdata['email'] = $data->email;
                             $newdata['created_at'] = $data->created_at;
                             $newdata['logged_in'] = 'yesGetMeLoginBaby';
                             $newdata['stts'] = 'Administrator';
                             $cek_password = $data->password;
             			         }
                        if (md5($this->input->post("password"))==$cek_password){
                             $this->session->set_userdata($newdata);
    	                       header('location:/dashboard');
                        }else{
                              $this->session->set_flashdata('pesan','Email dan Password tidak sesuai');
    	                       header('location:/login');
                        }

  	             }else{
  	                  	$this->session->set_flashdata('pesan','Email dan Password tidak sesuai');
  	                   header('location:/login');
  	              }
  					}
  	}


}
