<?php

use phpDocumentor\Reflection\Types\Boolean;

defined("BASEPATH") or exit("No direct script access allowed");

/**
 * @property CI_Input $input
 * @property CI_Output $output
 * @property CI_Loader|MY_Loader $load
 * @property CI_Parser $parser
 */
class Layout extends MY_Controller
{

    /**
     * construct function
     *
     * @method _construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * default entry
     *
     * @mathod index
     *
     * @return void generate 404 page
     */
    public function index()
    {
        show_404();
    }

    /**
     * entry point for accessing module
     *
     * @method backend
     *
     * @param array|null $data
     * @return void
     */
    public function backend($data)
    {
        $new_data = $this->data_check($data);
        if ($new_data) {
            $this->load->view('vw_backend', $new_data);
        } else {
            show_404();
        }
    }

    /**
     * method for checking array data that available for send to module
     *
     * @method data_check
     *
     * @param array|null $data
     * @return array|bool
     */
    private function data_check($data)
    {
        if ($data != null) {
            $newdata = $data;
            $module = $data['module'] ?? 'layout';
            $view = $data['view'] ?? 'vw_error_404';
            $page_title = $data['page_title'] ?? '_____';
            $view_page = "$module/$view";
            $newdata['page_title'] = $page_title;
            $newdata['view'] = $view_page;
            $newdata['data'] = $data['data'] ?? null;
            return $newdata;
        } else {
            return false;
        }
    }
}
