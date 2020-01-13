<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
* Description of product
*
* @author https://www.roytuts.com
*/


class Product extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('product_model');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('pagination');
      
   if(!$this->session->userdata('logged_in')) {
     
     $this->session->set_flashdata('no_access', 'You must be logged in to have access');
     
     redirect('index.php/Home');
   }
   
 } 


	
	public function index() {
	$data['main_view'] = "users/addproduct_view";
  $this->load->view('layouts/main_view', $data);
	

		$data['salesinfo'] = $this->product_model->get_salesinfo();
		$this->load->view('salesinfo', $data);

	}
	
	public function add_product(){
		
	$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[255]');  
    
	$this->form_validation->set_rules('cost', 'Cost', 'decimal|required');  
 
	$this->form_validation->set_rules('sale_price', 'Sale Price', 'decimal|required');  
    
	$this->form_validation->set_rules('sales_count', 'Quantity', 'is_natural|required');  
        
		
		
		

	if ($this->form_validation->run() == FALSE) {
					 $this->session->set_flashdata('message', 'Data Insertion Failed');
					 $data['main_view'] = "users/addproduct_view";
           $this->load->view('layouts/main_view', $data);
	} else {
//Setting values for tabel columns
		
	$data = array(
		
	'name' => $this->input->post('name'),
	'cost' => $this->input->post('cost'),
	'sale_price' => $this->input->post('sale_price'),
	'sales_count' => $this->input->post('sales_count')
		
);

//Transfering data to Model
$this->product_model->add_product($data);
$this->session->set_flashdata('message', 'Data Inserted Successfully');
//Loading View
$data['main_view'] = "users/addproduct_view";
$this->load->view('layouts/main_view', $data);
$this->session->set_flashdata('message', 'Data Insertion Sucess');
redirect('index.php/Product');
}
}	
		
		 public function delete($id){
		 
		 $this->product_model->delete_products($id);
		 $this->session->set_flashdata('message', 'Product Has Been Deleted');
			redirect('index.php/Product');
		 
	 }
		
	}//end of Product Class
	



/* End of file product.php */
/* Location: ./application/controllers/product.php */