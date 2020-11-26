<?php
//'tes' => number_format(200 / 100, 2, ",", "."),
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Product extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper("url");
        $this->load->database();
        $this->load->model('Product_model','prod_modal');
        date_default_timezone_set('Asia/Jakarta');
    }
        function index_get($id)
    {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            return false;
        }
  print_r($id);
  exit;
        $app_settings = $this->prod_modal->get_product_data($id);
        $message = array(

            'status' => true,
            'msg' => 'found',
            'data' => $id
        );
        $this->response($message, 200);
        
    }

}