<?php

class Product_model extends CI_model
{
    public function getadmin()
    {
        $this->db->where('id', '1');
        return  $this->db->get('admin')->row_array();
    }

    public function get_product_detail()
    {
        //$query_cat=$this->db->get('category_management');
       $query = $this->db->get('product');
     
       return $query->result();
    }
        public function add_new_product($data)
    {
        
        return $this->db->insert('product', $data);
    }
    public function get_product_id($id){
        return $this->db->get_where('product', ['id' => $id])->row_array();
    }
      public function update_product_data($data)
    {

       
        
       //print_r($data);exit;
        $this->db->set('category_id', $data['category_id']);
        $this->db->set('product_name', $data['product_name']);
        $this->db->set('status', $data['status']);
         $this->db->set('price', $data['price']);

        $this->db->where('id', $data['id']);
        return $this->db->update('product', $data);
    }
    public function delete_product_categoey($id){
         $this->db->where('id', $id);
        return $this->db->delete('product');
    }
    public function get_product_data($id)
    {
         return $this->db->get_where('product', ['category_id' => $id])->result_array();
       return $query->result();
}
    }
