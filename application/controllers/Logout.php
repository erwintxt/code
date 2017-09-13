<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Logout extends CI_Controller {
  public function index()
	{
    $this->session->sess_destroy('');
		header('location:/login');
  }
}
