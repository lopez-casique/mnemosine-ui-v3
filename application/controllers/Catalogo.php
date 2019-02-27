<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function catBusqueda(){
    $this->load->view('layouts/header');
    $this->load->view('catalogo/busqueda');
    $this->load->view('layouts/footer');
  }

  function catAgregar(){
    $this->load->view('layouts/header');
    $this->load->view('catalogo/agregar');
    $this->load->view('layouts/footer');
  }

}
