<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Dashboard extends CI_Controller {
    public function index()
	   {
       if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="Administrator")
   		{
                           $d['company'] = $this->config->item('company');
                           $d['credit'] = $this->config->item('credit');
                           $d['alamat'] = $this->config->item('alamat');
                           $d['telepon'] = $this->config->item('telepon');
                           $this->load->model('user_model');
                           $this->load->model('product_model');
                           $hasil = $this->user_model->datausersum("user");
                           $hasil2 = $this->product_model->dataproductsum("product");
                           $d['user_count'] = $hasil;
                           $d['product_count'] = $hasil2;
                           $this->load->view('layout/header',$d);
                           $this->load->view('dashboard',$d);
                           $this->load->view('layout/footer',$d);
   		}
   		else
   		{
   			header('location:/login');
   		}

	  }

}
