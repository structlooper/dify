<?php
//'tes' => number_format(200 / 100, 2, ",", "."),
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Product extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        // $this->load->helper("url");
        $this->load->database();
        $this->load->model('Product_model','prod_modal');
        date_default_timezone_set('Asia/Jakarta');
    }
        function index_post()
    {
        
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            return false;
        }
 //$decoded_data = json_decode($data);
 //$condition = array(
   //         'category_id' => $decoded_data->category_id,
            
//    );
      $app_settings = $this->prod_modal->get_product_data($_POST['category_id']);
  
 
        $message = array(

            'status' => true,
            'msg' => 'found',
            'data' => $app_settings
        );
        $this->response($message, 200); 
        
    }

}