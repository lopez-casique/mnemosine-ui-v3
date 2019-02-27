<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // Solo vistas
  function busqueda(){
    $this->load->view('layouts/header');
    $this->load->view('consultas/busqueda');
    $this->load->view('layouts/footer');
  }

  function resBusqueda(){
    $this->load->view('layouts/header');
    $this->load->view('consultas/resultado');
    $this->load->view('layouts/footer');
  }

  function detBusqueda(){
    $this->load->view('layouts/header');
    $this->load->view('consultas/detalle');
    $this->load->view('layouts/footer');
  }

  // Funciones y CRUD

}
