<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administracion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function adminConjuntos(){
    $this->load->view('layouts/header');
    $this->load->view('administracion/conjuntos');
    $this->load->view('layouts/footer');
  }

  function adminColecciones(){
    $this->load->view('layouts/header');
    $this->load->view('administracion/colecciones');
    $this->load->view('layouts/footer');
  }

  function adminRegistrar(){
    $this->load->view('layouts/header');
    $this->load->view('administracion/registrar');
    $this->load->view('layouts/footer');
  }

}
