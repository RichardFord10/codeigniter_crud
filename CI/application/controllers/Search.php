<?php

class Search extends CI_Controller {

  function __construct() {
		parent::__construct();
		$this->load->model('search_model');
	}
  
  
  
    public function search_user()
{
   
   $main['main_view'] = "/users/admin_view";
   $this->load->view('layouts/main_view', $main);
		
		$search = $this->input->post('search');
    $data['users'] =  $this->search_model->search_users($search);
    $this->load->view('result_view',$data);
	
}
		    public function search_product()
{
   
   $main['main_view'] = "/users/admin_view";
   $this->load->view('layouts/main_view', $main);
		
		$search = $this->input->post('search');
    $data['products'] =  $this->search_model->search_product($search);
    $this->load->view('result_view',$data);
	
}
	
	
	
}

?>