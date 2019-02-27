<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restauracion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){
    $this->load->view('layouts/header');
    $this->load->view('restauracion/restauracion');
    $this->load->view('layouts/footer');
  }

}
