

<?php

class MerchantProduct_model extends CI_model
{
    public function getadmin()
    {
        $this->db->where('id', '1');
        return  $this->db->get('admin')->row_array();
    }

  
        public function add_new_product($data)
    {
        
        return $this->db->insert('mechant_product_management', $data);
    }
    public function get_product_id($id){
        return $this->db->get_where('product', ['id' => $id])->row_array();
    }
     
    public function get_product_data($data)
    {
         return $this->db->get_where('mechant_product_management', ['merchant_id' => $data['merchant_id'] ,'category_id' => $data['category_id'],'product_id' => $data['product_id']])->result_array();
       return $query->result();
}
    }