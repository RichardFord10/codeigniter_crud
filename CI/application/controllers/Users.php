<?php 

class Users extends CI_Controller {
  
  public function register() {
   
  $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[20]');  
    
  $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[20]'); 
 
  $this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[5]|max_length[255]|valid_email');   
    
  $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[55]');
    
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[15]');
    
  $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[4]|max_length[15]|matches[password]');
    
 
    

    if ($this->form_validation->run() == FALSE) {       
           $data['main_view'] = "users/register_view";
           $this->load->view('layouts/main_view', $data);

    }else{
      
       $data = array(
   
   'first_name' => $this->input->post('first_name'),
   'last_name' => $this->input->post('last_name'),
   'email' => $this->input->post('email'),
   'username' => $this->input->post('username'),
   'password' => $this->input->post('password')

         
    );
      
      $this->user_model->create_user($data);
      $this->session->set_flashdata('message', 'Registration Successful');
 
    $data['main_view'] = "users/register_view";
    $this->load->view('layouts/main_view', $data);
     
     
    }
    
    
    
  }// end of register method
  

  
  public function login() {
    
  $this->load->library('session');  
  $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[55]');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
 
  
  if ($this->form_validation->run() == FALSE) {       
           $errors = validation_errors();
           $this->session->set_flashdata('log_error', $errors);
           redirect('index.php/home');
    echo var_dump($db_password);
 
   
  } else {
   
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   
  $user_id = $this->user_model->login_user($username, $password);
  
   if($user_id){
     
     $user_data = array(
       
     'user_id' => $user_id,
     'user_name' => $username,
     'logged_in' => TRUE
     
     
     );
     
     //set session
   $this->session->set_userdata($user_data);
   $this->session->set_flashdata('login_success', 'You are now logged in');
     
   $data['main_view'] = "/users/admin_view";
   $this->load->view('layouts/main_view', $data);
     
   } else {
    
  $this->session->set_flashdata('login_failed', 'Sorry we can not log you in');
  redirect('index.php/Home');
     
   }
   
 }
    
  }// end of login method
  
  
  public function logout() {
    
$this->session->sess_destroy();
redirect('index.php/Home');
$this->session->set_flashdata('logged_out', 'Successfully Logged Out!');
    
   

  }
  
   public function get_users($data){
    
    $this->load->library('table');

    $this->table->set_heading('first_name', 'last_name', 'username', 'register_date');

    $query = $this->db->query('SELECT * FROM users');

     echo $this->table->generate($query);
    
  }
  
  
  
  
  
  
  
  
  
  
}




































?>