<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
/**
* Description of Product_model
*
* @author https://www.roytuts.com
*/

class Project_model extends CI_Model {		


	
	/* Get Product Info */
	
	
	public function get_projects() {
		
		$query = $this->db->get('projects');

			return $query->result();
		}
	
	public function get_count() {
        return $this->db->count_all($this->table);
    }
	
	/* add products into products db*/
	
	  public function add_project($data){

		$data = array(
	
	'project_user_id' => $this->session->userdata('user_id'),
	'project_name' => $this->input->post('project_name'),
	'project_body' => $this->input->post('project_body')
		
);
			
	$insert_data = $this->db->insert('projects', $data);
    
		return $insert_data;
		
    
    
  }// End of add_products
	
		 public function get_project($id){
			 
		 $this->db->where('id', $id);
		 $query = $this->db->get('projects');
	
		 
		 return $query->row();
		 
		 
		 
		 
		 
	 }// end of get_project
	
	
	
	  public function edit_project($project_id, $data){

	$this->db->where('id', $project_id);
		$this->db->update('projects', $data);
			
	return true;
			
		} // end of edit_project
	
	
	
		public function get_projects_info($project_id){
			
					$this->db->where('id', $project_id);
					$get_data = $this->db->get('projects');
			return $get_data->row();

			
			
			
		}// end of get_projects_info

	  public function delete_projects($id) {
    
    $this->db->where(['id'=>$id]);
    $this->db->delete('projects');
    
  }
	 
	 
	
	
}
/* End of file product_model.php */
/* Location: ./application/models/product_model.php */