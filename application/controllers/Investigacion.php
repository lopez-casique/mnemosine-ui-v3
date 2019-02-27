<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investigacion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function invBusqueda(){
    $this->load->view('layouts/header');
    $this->load->view('investigacion/busqueda');
    $this->load->view('layouts/footer');
  }

  function invResBus(){
    $this->load->view('layouts/header');
    $this->load->view('investigacion/resultado');
    $this->load->view('layouts/footer');
  }

}
