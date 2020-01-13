<?php
 class Projects extends CI_Controller {
   
   public function __construct(){
     parent::__construct();
     $this->load->model('project_model');
     $this->load->library('form_validation');
		 $this->load->helper('form');
		 $this->load->helper('date');
		 $this->load->library('pagination');
  
      
   if(!$this->session->userdata('logged_in')) {
     
     $this->session->set_flashdata('no_access', 'You must be logged in to have access');
     
     redirect('index.php/Home');
   }
   
 } 
   public function index(){
	$data['main_view'] = "projects/addproject_view";
  $this->load->view('layouts/main_view', $data);
		 
		 
		 
    $data['projects'] = $this->project_model->get_projects();
    $this->load->view('projects/projects_view', $data);     
   }
   
   public function add_project(){
		
	$this->form_validation->set_rules('project_name', 'Name', 'trim|required|min_length[3]|max_length[255]');  
    
	$this->form_validation->set_rules('project_body', 'Body', 'required');  

	if ($this->form_validation->run() == FALSE) {
					 $this->session->set_flashdata('message', 'Data Insertion Failed');
					 $data['main_view'] = "projects/addproject_view";
           $this->load->view('layouts/main_view', $data);
	} else {
//Setting values for tabel columns
		
	$data = array(
	
	'project_user_id' => $this->session->userdata('user_id'),
	'project_name' => $this->input->post('project_name'),
	'project_body' => $this->input->post('project_body')
	
);

//Transfering data to Model
$this->project_model->add_project($data);
$this->session->set_flashdata('message', 'Data Inserted Successfully');
//Loading View
$data['main_view'] = "projects/addproject_view";
$this->load->view('layouts/main_view', $data);
$this->session->set_flashdata('message', 'Data Insertion Sucess');
redirect('index.php/Projects');
}
}	
   
	 

	 
	 
	 
	 
	 
	 
	 
	 
   public function display($project_id){
		 
		 $data['project_data'] = $this->project_model->get_project($project_id);
		 
		 
		 
		 $data['main_view'] = "projects/display";
		 $this->load->view('layouts/main_view', $data);
		 
	 }
   
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
   public function edit($project_id){
		
	$this->form_validation->set_rules('project_name', 'Name', 'trim|required|min_length[3]|max_length[255]');  
	$this->form_validation->set_rules('project_body', 'Body', 'required');  

	if ($this->form_validation->run() == FALSE) {
		
				$data['project_data'] = $this->project_model->get_projects_info($project_id);
					 $data['main_view'] = "projects/edit_project_view";
						$this->load->view('layouts/main_view', $data);
	} else {
		
	$data = array(
	
	'project_user_id' => $this->session->userdata('user_id'),
	'project_name' => $this->input->post('project_name'),
	'project_body' => $this->input->post('project_body')
	
);

//Transfering data to Model
$this->project_model->edit_project($project_id, $data);
//Loading View
$this->session->set_flashdata('message', 'Project Has Been Updated');
redirect('index.php/Projects');
}
}	

	 public function delete($project_id){
		 
		 $this->project_model->delete_projects($project_id);
		 $this->session->set_flashdata('message', 'Project Has Been Deleted');
			redirect('index.php/Projects');
		 
	 }
		 

   
 }//end of Project Class
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  ?>
  
  