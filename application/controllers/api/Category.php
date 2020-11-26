<?php
//'tes' => number_format(200 / 100, 2, ",", "."),
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Category extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper("url");
        $this->load->database();
        $this->load->model('Driver_model');
        $this->load->model('Pelanggan_model');
        $this->load->model('Product_category_model','cat_modal');
        date_default_timezone_set('Asia/Jakarta');
    }
        function index_get()
    {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            return false;
        }

        $app_settings = $this->cat_modal->get_product_categoey();

        $message = array(
            'status' => true,
            'msg' => 'found',
            'data' => $app_settings
        );
        $this->response($message, 200);
        
    }

}