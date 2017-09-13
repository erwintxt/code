<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Dataproduct extends CI_Controller {
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
                        $this->load->model('product_model');

     			$page=$this->uri->segment(3);
     			$limit=$this->config->item('limit_data');
     			if(!$page):
     			$offset = 0;
     			else:
     			$offset = $page;
     			endif;

     			$d['tot'] = $offset;
                      $tot_hal = $this->product_model->getalldataproduct();
                      if (count($tot_hal)>0){ //penghitung data ditemukan
                          $d['hitung'] = '';
                      }else{
                          $d['hitung'] = 'Data Tidak Ditemukan' ;  ;
                          }
     			$config['base_url'] = '/dataproduct/index/';
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

            $d['data_product'] = $this->product_model->getdataproduct( $limit, $offset);
            $this->load->view('listproduct',$d);
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
                        $this->load->model('type_model');
                        $d['data_type'] = $this->type_model->getalldatatype();
                        $this->load->view('formcreateproduct',$d);
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


                        $d['company'] = $this->config->item('company');
                				$this->form_validation->set_rules('product_name', 'product_name', 'trim|required|min_length[3]|max_length[9]');
                				$this->form_validation->set_rules('supplier_name', 'supplier_name', 'trim|required|min_length[3]|max_length[100]');
                				$this->form_validation->set_rules('price', 'price', 'trim|required|min_length[3]|max_length[15]');
                				$this->form_validation->set_rules('id_type', 'id_type', 'trim|required|numeric|min_length[1]|max_length[10]');

                				if ($this->form_validation->run() == FALSE)
                					{
                            $this->load->model('type_model');
                            $d['data_type'] = $this->type_model->getalldatatype();
                							$this->load->view('formcreateproduct',$d);
                              $this->load->view('layout/footer',$d);
                					}else{
                              $this->load->model('product_model');
                	             $insert['product_name'] = $this->input->post("product_name");
                							 $insert['supplier_name'] = $this->input->post("supplier_name");
                							 $insert['price'] = $this->input->post("price");
                							 $insert['id_type'] = $this->input->post("id_type");
                               $insert['created_at'] = date('Y-m-d H:i:s');
                							 $hasil = $this->product_model->insertproduct("product",$insert);
                	             if ($hasil >= 1){
                                      $this->session->set_flashdata('pesan','Data telah ditambahkan Bro');
                	                   header('location:/dataproduct/create');
                	             }else{
                	                  	$this->session->set_flashdata('pesan','Tambah data gagal Bro');
                	                   header('location:/dataproduct/create');
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
                       $this->load->model('product_model');
			                 $query = $this->product_model->dataproductwhere("product",  $id);

			                 foreach($query as $data){
				                  $d['id'] = $data->id;
                          $d['product_name'] = $data->product_name;
                          $d['supplier_name'] = $data->supplier_name;
				                  $d['price'] = $data->price;
                          $d['id_type'] = $data->id_type;}
                          $this->load->model('type_model');
                          $d['data_type'] = $this->type_model->getalldatatype();

                        $this->load->view('formeditproduct',$d);
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
                       $this->form_validation->set_rules('product_name', 'product_name', 'trim|required|min_length[3]|max_length[9]');
               				$this->form_validation->set_rules('supplier_name', 'supplier_name', 'trim|required|min_length[3]|max_length[10]');
               				$this->form_validation->set_rules('price', 'price', 'trim|required|min_length[3]|max_length[15]');
               				$this->form_validation->set_rules('id_type', 'id_type', 'trim|required|min_length[1]|max_length[15]',
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
                               $this->load->model('product_model');
        			                 $query = $this->product_model->dataproductwhere("product",  $id);

        			                 foreach($query as $data){
        				                  $d['id'] = $data->id;
                                  $d['product_name'] = $data->product_name;
                                  $d['supplier_name'] = $data->supplier_name;
        				                  $d['price'] = $data->price;
                                  $d['id_type'] = $data->id_type;}

                                  $this->load->view('formeditproduct',$d);
                                  $this->load->view('layout/footer',$d);

               					}else{
                             $this->load->model('product_model');
                              $id =  $this->input->post("id");
               	             $update['product_name'] = $this->input->post("product_name");
               							 $update['supplier_name'] = $this->input->post("supplier_name");
               							 $update['price'] = str_replace(".","",$this->input->post("price"));
               							 //$update['password'] = md5($this->input->post("password"));
                              //$update['created_at'] = date('Y-m-d H:i:s');
               							 $hasil = $this->product_model->updatedataproduct("product",$update,array('id' => $id));
               	             if ($hasil >= 1){
                                     $this->session->set_flashdata('pesan','Data Telah diganti Bro');
               	                   header('location:/dataproduct/edit/'.$id.'');
               	             }else{
               	                  	$this->session->set_flashdata('pesan','Edit data Gagal Bro');
               	                   header('location:/dataproduct/edit/'.$id.'');
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
          $this->load->model('product_model');
    			$this->product_model->deletedataproduct("product",$id);
    			$this->session->set_flashdata('pesan','Data Telah Dihapus');
                            header('location:/dataproduct');


        }else{
                        header('location:/login');
        }
	}


}
