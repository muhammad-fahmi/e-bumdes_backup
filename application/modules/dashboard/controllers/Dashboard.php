<?php

/**
 * @property Mdl_dashboard $dashboard
 * @property CI_Loader|MY_Loader $load
 */
class Dashboard extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mdl_dashboard', 'dashboard');
  }

  public function index()
  {
    $sent_data = [];
    $data = [
      'page_title' => 'Dashboard | E-Commerce',
      'module' => 'dashboard',
      'view' => 'vw_dashboard',
      'data' => $sent_data
    ];
    echo Modules::run('layout/backend', $data);
  }
}
