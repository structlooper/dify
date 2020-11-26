<?php
//'tes' => number_format(200 / 100, 2, ",", "."),
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class GetMerchProduct extends REST_Controller
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


 
 

     
      $data             = [
              
                'merchant_id'              => $_POST['merchant_id'],
                'category_id'                  => $_POST['category_id'],
                'product_id'                  => $_POST['product_id'],
                
             
            ];
     
     
     
       
            
      $app_settings = $this->Mprod_modal->get_product_data($data);
 
 if(!empty($app_settings))
 {
        $message = array(

            'status' => true,
            'msg' => 'Data Found',
            'data' => $app_settings
        );
        $this->response($message, 200); 
 }
 else
 
 {
     $message = array(

            'status' => true,
            'msg' => 'Data Not Found',
            'data' => []
        );
        $this->response($message, 200); 
     
 }
        
        
    }

}