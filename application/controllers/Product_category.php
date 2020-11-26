<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       
        if ($this->session->userdata('user_name') == NULL && $this->session->userdata('password') == NULL) {
            redirect(base_url() . "login");
        }
        $this->load->model('Product_category_model', 'cat_modal');
        // $this->load->model('news_model', 'news');
        $this->load->library('form_validation');
    }

    public function index()
    {
     
        $data['cate'] = $this->cat_modal->get_product_categoey();
// echo json_encode(['debug' => gettype($data)]);exit;
        $this->load->view('includes/header');
        $this->load->view('product_category/index', $data);
        $this->load->view('includes/footer');
    }

     public function add()

    {

        $this->form_validation->set_rules('category_name', 'category_name', 'trim|prep_for_form');
       
        if ($this->form_validation->run() == TRUE) {
           

            $data             = [
              
                'category_management_name'              => html_escape($this->input->post('category_name', TRUE)),
                'category_status'                  => html_escape($this->input->post('category_status', TRUE)),
             
            ];
            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('product_category/add');
            } else {
                $this->cat_modal->add_new_category($data);
                $this->session->set_flashdata('tambah', 'New Category Has Been Added');
                redirect('product_category');
            }
        } else {
            
            $this->load->view('includes/header');
            $this->load->view('product_category/add');
            $this->load->view('includes/footer');
        }
    }
      public function update($id)
    {
         $this->form_validation->set_rules('category_name', 'category_name', 'trim|prep_for_form');
        //   print_r('$data');exit;


       
        $data['cate'] = $this->cat_modal->get_category_by_id($id);
     
        if ($this->form_validation->run() == TRUE) {
        
            $data             = [
                'category_management_name'                            => html_escape($this->input->post('category_name', TRUE)),
                'category_status'              => html_escape($this->input->post('category_status', TRUE)),
                'id'              => $id,
              
            ];
            
            if (demo == TRUE) {
                $this->session->set_flashdata('demo', 'NOT ALLOWED FOR DEMO');
                redirect('product_category/index');
            } else {
                
                $this->cat_modal->update_product_categoey($data);
                $this->session->set_flashdata('ubah', 'Category Has Been Updated');
                redirect('product_category');
            }
        } else {
            $this->load->view('includes/header');
            $this->load->view('product_category/update' , $data);
            $this->load->view('includes/footer');
        }
    }
    public function delete($id){
         
                $this->cat_modal->delete_product_categoey($id);
                $this->session->set_flashdata('ubah', 'Category Has Been Deleted');
                redirect('product_category');
    }
}