<?php
function get_name()
{
  $CI = &get_instance();
  $CI = new MY_Controller();
  if (isset($_SESSION['name'])) {
    $name = $CI->session->get_userdata('name');
  } else {
    $name = 'default';
  }

  return $name;
}
