<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Datauser extends CI_Controller {
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
                        $this->load->model('user_model');

     			$page=$this->uri->segment(3);
     			$limit=$this->config->item('limit_data');
     			if(!$page):
     			$offset = 0;
     			else:
     			$offset = $page;
     			endif;

     			$d['tot'] = $offset;
                      $tot_hal = $this->user_model->getalldatauser();
                      if (count($tot_hal)>0){ //penghitung data ditemukan
                          $d['hitung'] = '';
                      }else{
                          $d['hitung'] = 'Data Tidak Ditemukan' ;  ;
                          }
     			$config['base_url'] = '/datauser/index/';
     			//$config['total_rows'] = $tot_hal->num_rows(); jika query pada controller
          $config['total_rows'] = count($tot_hal);
          $config['per_page'] = $limit;
     			$config['uri_segment'] = 3;
     			$config['first_link'] = 'Awal';
     			$config['last_link'] = 'Akhir';
     			$config['next_link'] = 'Selanjutnya';
     			$config['prev_link'] = 'Sebelumnya';

          /*Class bootstrap pagination yang digunakan*/
          $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
             $config['full_tag_close'] ="</ul>";
          $config['num_tag_open'] = '<li>';
          $config['num_tag_close'] = '</li>';
          $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
          $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
          $config['next_tag_open'] = "<li>";
          $config['next_tagl_close'] = "</li>";
          $config['prev_tag_open'] = "<li>";
          $config['prev_tagl_close'] = "</li>";
          $config['first_tag_open'] = "<li>";
          $config['first_tagl_close'] = "</li>";
          $config['last_tag_open'] = "<li>";
          $config['last_tagl_close'] = "</li>";

     			$this->pagination->initialize($config);
     			$d["paginator"] =$this->pagination->create_links();

            $d['data_user'] = $this->user_model->getdatauser( $limit, $offset);
            $this->load->view('listuser',$d);
            $this->load->view('layout/footer',$d);






    }
    else
    {
      header('location:/login');
    }

  }


	public function create()
	{
    if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
        {
                       $d['company'] = $this->config->item('company');
                       $d['credit'] = $this->config->item('credit');
                       $d['alamat'] = $this->config->item('alamat');
                       $d['telepon'] = $this->config->item('telepon');
                        $this->load->view('layout/header',$d);
                        $this->load->view('formcreateuser',$d);
                        $this->load->view('layout/footer',$d);
        }else{
                        header('location:/login');
        }
	}
  public function createpost()
	{
    if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
        {
                       $d['company'] = $this->config->item('company');
                       $d['credit'] = $this->config->item('credit');
                       $d['alamat'] = $this->config->item('alamat');
                       $d['telepon'] = $this->config->item('telepon');
                        $this->load->view('layout/header',$d);
                        $this->load->view('layout/footer',$d);

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
                							$this->load->view('formcreate',$d);
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
                                      $this->session->set_flashdata('pesan','Data telah ditambahkan Bro');
                	                   header('location:/datauser/create');
                	             }else{
                	                  	$this->session->set_flashdata('pesan','Tambah data gagal Bro');
                	                   header('location:/datauser/create');
                	              }
                					}



        }else{
                        header('location:/login');
        }
	}

  public function edit()
	{
    if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
        {
                       $d['company'] = $this->config->item('company');
                       $d['credit'] = $this->config->item('credit');
                       $d['alamat'] = $this->config->item('alamat');
                       $d['telepon'] = $this->config->item('telepon');
                       $this->load->view('layout/header',$d);

                       $id['id'] = $this->uri->segment(3);
                       $this->load->model('user_model');
			                 $query = $this->user_model->datauserwhere("user",  $id);

			                 foreach($query as $data){
				                  $d['id'] = $data->id;
                          $d['name'] = $data->name;
                          $d['address'] = $data->address;
				                  $d['telp'] = $data->telp;
                          $d['email'] = $data->email;}

                        $this->load->view('formedituser',$d);
                        $this->load->view('layout/footer',$d);
        }else{
                        header('location:/login');
        }
	}

  public function editpost()
	{
    if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
        {
                       $d['company'] = $this->config->item('company');
                       $d['credit'] = $this->config->item('credit');
                       $d['alamat'] = $this->config->item('alamat');
                       $d['telepon'] = $this->config->item('telepon');
                       $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[3]|max_length[9]');
               				$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[3]|max_length[10]');
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
                               $id['id'] = $this->input->post("id");
                               $this->load->model('user_model');
        			                 $query = $this->user_model->datauserwhere("user",  $id);

        			                 foreach($query as $data){
        				                  $d['id'] = $data->id;
                                  $d['name'] = $data->name;
                                  $d['address'] = $data->address;
        				                  $d['telp'] = $data->telp;
                                  $d['email'] = $data->email;}

                                  $this->load->view('formedituser',$d);
                                  $this->load->view('layout/footer',$d);

               					}else{
                             $this->load->model('user_model');
                              $id =  $this->input->post("id");
               	             $update['name'] = $this->input->post("name");
               							 $update['address'] = $this->input->post("address");
               							 $update['telp'] = $this->input->post("telp");
               							 //$update['password'] = md5($this->input->post("password"));
                              //$update['created_at'] = date('Y-m-d H:i:s');
               							 $hasil = $this->user_model->updatedatauser("user",$update,array('id' => $id));
               	             if ($hasil >= 1){
                                     $this->session->set_flashdata('pesan','Data Telah diganti Bro');
               	                   header('location:/datauser/edit/'.$id.'');
               	             }else{
               	                  	$this->session->set_flashdata('pesan','Edit data Gagal Bro');
               	                   header('location:/datauser/edit/'.$id.'');
               	              }
               					}

        }else{
                        header('location:/login');
        }
	}

  public function hapus()
	{
    if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
        {

          $id['id'] = $this->uri->segment(3);
          $this->load->model('user_model');
    			$this->user_model->deletedatauser("user",$id);
    			$this->session->set_flashdata('pesan','Data Telah Dihapus');
                            header('location:/datauser');


        }else{
                        header('location:/login');
        }
	}


}
