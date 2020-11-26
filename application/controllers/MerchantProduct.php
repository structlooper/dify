
application/x-httpd-php Product.php ( C++ source, ASCII text )
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MerchantProduct extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       
        if ($this->session->userdata('user_name') == NULL && $this->session->userdata('password') == NULL) {
            redirect(base_url() . "login");
        }
        $this->load->model('Product_model','prod_modal');
         $this->load->model('Product_category_model', 'cat_modal');
        // $this->load->model('news_model', 'news');
        $this->load->library('form_validation');
    }
    
     public function index()
    {
     
        $data_product['product'] = $this->prod_modal->get_product_detail();
// echo json_encode(['debug' => gettype($data)]);exit;
        $this->load->view('includes/header');
        $this->load->view('product/index', $data_product);
        $this->load->view('includes/footer');
    }
    
     public function add()

    {
        $data_cat['categryname'] = $this->cat_modal->get_product_categoey();
 
        if ($this->input->post('category_name', TRUE)) {
           

            $data             = [
              
                'category_id'              => html_escape($this->input->post('category_name', TRUE)),
                'product_name'                  => html_escape($this->input->post('product_name', TRUE)),
                'status'                  => html_escape($this->input->post('category_status', TRUE)),
                'price'                  => html_escape($this->input->post('product_price', TRUE)),
                
             
            ];
            
            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('product/add');
            } else {
                    $this->prod_modal->add_new_product($data);
                $this->session->set_flashdata('tambah', 'New Product Has Been Added');
                redirect('product');
            }
        } else {
            
            $this->load->view('includes/header');
            $this->load->view('product/add', $data_cat);
            $this->load->view('includes/footer');
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      public function update($id)
    {
        
        // $this->form_validation->set_rules('category_name', 'category_name', 'trim|prep_for_form');
        //   print_r('$data');exit;


       $data_prod['product'] = $this->prod_modal->get_product_id($id);

     
        if ($this->input->post('category_name', TRUE)) {
            $data             = [
                'category_id'                            => html_escape($this->input->post('category_name', TRUE)),
                'product_name'              => html_escape($this->input->post('product_name', TRUE)),
                'status'             => html_escape($this->input->post('product_status', TRUE)),
                'price'           => html_escape($this->input->post('product_price', TRUE)),
                'id'              => $id,
              
            ];
            
            
            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('product/index');
            } else {
                
                $this->prod_modal->update_product_data($data);
                $this->session->set_flashdata('ubah', 'Product Has Been Updated');
                redirect('product');
            }
        } else {
            $this->load->view('includes/header');
            $this->load->view('product/update' , $data_prod);
            $this->load->view('includes/footer');
        }
    }
    
    
    
    
    
    public function delete($id){
         
                $this->prod_modal->delete_product_categoey($id);
                $this->session->set_flashdata('ubah', 'Category Has Been Deleted');
                redirect('product');
    }
}