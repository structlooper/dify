<?php
//'tes' => number_format(200 / 100, 2, ",", "."),
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class MerchantProduct extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        // $this->load->helper("url");
        $this->load->database();
      $this->load->model('MerchantProduct_model','Mprod_modal');
        date_default_timezone_set('Asia/Jakarta');
    }
        function index_post()
    {
        
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            return false;
        }

 if(isset($_POST['product_description'])){
 
  $data             = [
              
                'merchant_id'              => $_POST['merchant_id'],
                'category_id'                  => $_POST['category_id'],
                'product_id'                  => $_POST['product_id'],
                'product_stock'                  => $_POST['product_stock'],
                 'product_description'                  => $_POST['product_description'],
                'product_price'                  => $_POST['product_price'],
                
             
            ];
 }
 else
 
 {
     
      $data             = [
              
                'merchant_id'              => $_POST['merchant_id'],
                'category_id'                  => $_POST['category_id'],
                'product_id'                  => $_POST['product_id'],
                'product_stock'                  => $_POST['product_stock'],
                'product_price'                  => $_POST['product_price'],
                
             
            ];
     
     
     
 }
            
            
      $app_settings = $this->Mprod_modal->add_new_product($data);
  
 
        $message = array(

            'status' => true,
            'msg' => 'Data Inserted',
            'data' => $app_settings
        );
        $this->response($message, 200); 
        
    }

}