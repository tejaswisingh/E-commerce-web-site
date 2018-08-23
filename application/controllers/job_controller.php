<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class job_controller extends CI_Controller {


public function job_post() {

	$job_info = array( 
    		'name' => $this->input->post('name'),
    		'email' => $this->input->post('email'),
    		'experience' => $this->input->post('experience')
    		);

	$this->load->library('form_validation');

	$this->form_validation->set_error_delimiters('<div class="error">','</div>');

    	$this->form_validation->set_rules('name', 'Name', 'min_length[7]|trim|required|xss_clean|callback_alpha_dash_space');
    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    	$this->form_validation->set_rules('experience', 'Experience', 'required|max_length[100]');

    	if($this->form_validation->run()== FALSE){
    		$this->load->view('Jobs');
    	}
    	else{

    		$insert_data = array( 
    		'Name' => $this->input->post('name'),
    		'Email' => $this->input->post('email'),
    		'Experience' => $this->input->post('experience')
    		);

  

    		$this->load->model('jobs_model');
    		$this->jobs_model->add_user_details($insert_data);
    		redirect(base_url() . "job_controller/inserted");
			
    	}
    }

public function alpha_dash_space($name){
    if (! preg_match('/^[a-zA-Z\s]+$/', $name)) {
        $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alphabets & White spaces');
        return FALSE;
    } else {
        return TRUE;
    }
    }

    public function inserted()  
      {  
           $this->job_post();  
      }  

}
?>