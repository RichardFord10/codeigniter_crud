<?php


class Search_model extends CI_Model {

    public function search_users($search)
{
      
      
    $this->db->select('*');
    $this->db->from('users');
    $this->db->like('username',$search);
    $this->db->or_like('id',$search);
    $this->db->or_like('first_name',$search);
    $this->db->or_like('last_name',$search);
    
    $query = $this->db->get();
    return $query->result();
}

  public function search_products($search){
    
    $this->db->select('*');
    $this->db->from('products');
    $this->db->like('name',$search);
    $this->db->or_like('id',$search);
    $this->db->or_like('cost',$search);
    
    
    $query = $this->db->get();
    return $query->result();
     
  }
  
  
}
?>