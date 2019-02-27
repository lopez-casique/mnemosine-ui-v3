<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function prestOrg(){
    $this->load->view('layouts/header');
    $this->load->view('prestamos/organizaciones');
    $this->load->view('layouts/footer');
  }

  function prestExp(){
    $this->load->view('layouts/header');
    $this->load->view('prestamos/exposiciones');
    $this->load->view('layouts/footer');
  }

  function prestMov(){
    $this->load->view('layouts/header');
    $this->load->view('prestamos/movimientos');
    $this->load->view('layouts/footer');
  }

  function prestAddOrg(){
    $this->load->view('layouts/header');
    $this->load->view('prestamos/addOrg');
    $this->load->view('layouts/footer');
  }

}
