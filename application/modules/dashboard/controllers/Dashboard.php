<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('DashboardModel', 'dashboard');
  }

  public function index() {
    dump($this->dashboard->get_data());
    $this->load->view('vw_dashboard');
  }
}


?>