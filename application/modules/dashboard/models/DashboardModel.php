<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_data(){
    return $this->db->query("SELECT * FROM m_user")->result_array();
  }
}

?>