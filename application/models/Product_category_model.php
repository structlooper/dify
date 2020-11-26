<?php

class Product_category_model extends CI_model
{
    public function getadmin()
    {
        $this->db->where('id', '1');
        return  $this->db->get('admin')->row_array();
    }

    public function get_product_categoey()
    {
       $query = $this->db->get('category_management');
       return $query->result();
    }
        public function add_new_category($data)
    {
        return $this->db->insert('category_management', $data);
    }
    public function get_category_by_id($id){
        return $this->db->get_where('category_management', ['id' => $id])->row_array();
    }
      public function update_product_categoey($data)
    {

       
    //  print_r($data);exit;
        $this->db->set('category_management_name', $data['category_management_name']);
        $this->db->set('category_status', $data['category_status']);

        $this->db->where('id', $data['id']);
        return $this->db->update('category_management', $data);
    }
    public function delete_product_categoey($id){
         $this->db->where('id', $id);
        return $this->db->delete('category_management');
    }
}
