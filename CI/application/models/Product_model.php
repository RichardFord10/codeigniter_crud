<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
/**
* Description of Product_model
*
* @author https://www.roytuts.com
*/

class Product_model extends CI_Model {		
	
	private $products = 'products';

	
	/* Get Product Info */
	
	
	function get_salesinfo() {
		$query = $this->db->get($this->products);

		if ($query->num_rows() > 0) {
			return $query->result();
		}
		
		return NULL;
	}
	
	public function get_count() {
        return $this->db->count_all($this->table);
    }
	
	/* add products into products db*/
	
	  public function add_product($data){
		$format = "%Y-%M-%d %H:%i";
		$now = @mdate($format);	
		$data = array(
		
	'name' => $this->input->post('name'),
	'cost' => $this->input->post('cost'),
	'sale_price' => $this->input->post('sale_price'),
	'sales_count' => $this->input->post('sales_count'),
	'sale_date' => date($now)
		
);
			
	$insert_data = $this->db->insert('products', $data);
    
		return $insert_data;
		
    
    
  }// End of add_products
	
  public function delete_products($id) {
    
    $this->db->where(['id'=>$id]);
    $this->db->delete('products');
    
  }
	
	
}
/* End of file product_model.php */
/* Location: ./application/models/product_model.php */