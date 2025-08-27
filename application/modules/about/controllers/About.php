<?php

/**
 * @property Mdl_about $about
 * @property CI_Loader|MY_Loader $load
 */
class About extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mdl_about', 'about');
  }

  public function index()
  {
    $sent_data = [];
    $data = [
      'page_title' => 'About | E-Commerce',
      'module' => 'about',
      'view' => 'vw_about',
      'data' => $sent_data
    ];
    echo Modules::run('layout/backend', $data);
  }
}