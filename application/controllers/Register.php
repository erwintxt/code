<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Register extends CI_Controller {
    public function index()
	   {
            //$this->load->model('cek_login_model');
            if($this->session->userdata('logged_in')=="")
		          {
                  $d['company'] = $this->config->item('company');
				          $this->load->view('formregister',$d);
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
				$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[3]|max_length[9]');
				$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[3]|max_length[100]');
				$this->form_validation->set_rules('telp', 'telp', 'trim|required|min_length[3]|max_length[15]');
				$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
				$this->form_validation->set_rules('password', 'password', 'trim|required|matches[password-confirmation]');
				$this->form_validation->set_rules('password-confirmation', 'password-confirmation ', 'trim|required');

				if ($this->form_validation->run() == FALSE)
					{
							$this->load->view('formregister',$d);
					}else{
              $this->load->model('user_model');
	             $insert['name'] = $this->input->post("name");
							 $insert['address'] = $this->input->post("address");
							 $insert['telp'] = $this->input->post("telp");
							 $insert['email'] = $this->input->post("email");
							 $insert['password'] = md5($this->input->post("password"));
               $insert['created_at'] = date('Y-m-d H:i:s');
							 $hasil = $this->user_model->insertuser("user",$insert);
	             if ($hasil >= 1){
                      $query = $this->user_model->datauserwhere("user", array('email' => $this->input->post("email")));
           			       $newdata = array();
           			      foreach($query as $data)
           			        {
           				         $newdata['id'] = $data->id;
           				         $newdata['name'] = $data->name;
           				         $newdata['address'] = $data->address;
                           $newdata['telp'] = $data->telp;
                           $newdata['email'] = $data->email;
                           $newdata['created_at'] = $data->created_at;
                           $newdata['logged_in'] = 'yesGetMeLoginBaby';
                           $newdata['stts'] = 'Administrator';
           			         }
                      //$newdata = array(
                      //        'logged_in'  => 'yesGetMeLoginBaby',
                      //        'name'     => $this->input->post("name")
                      //);
                      $this->session->set_userdata($newdata);
	                   header('location:/dashboard');
                     echo 'masuk';
	             }else{
	                  	$this->session->set_flashdata('pesan','Register Gagal');
	                   header('location:/register');
	              }
					}
	}

}
