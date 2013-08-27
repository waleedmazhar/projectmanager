<?php

class User_groups extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		$this->load->library('form_validation');		
		$this->load->helper(array('form','url','codegen_helper'));
		$this->load->model('codegen_model','',TRUE);
	}	
	
	function index(){
		$this->manage();
	}

	function manage(){
        $this->load->library('table');
        $this->load->library('pagination');
        
        //paging
        $config['base_url'] = base_url().'index.php/user_groups/manage/';
        $config['total_rows'] = $this->codegen_model->count('user_groups');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->codegen_model->get('user_groups','gp_id,name,desc','',$config['per_page'],$this->uri->segment(3));
       
	   
	    $this->load->view('header');  
		$this->load->view('user_groups_list', $this->data);   
		$this->load->view('footer');  
	    
       //$this->template->load('content', 'user_groups_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('user_groups') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'name' => set_value('name'),
					'desc' => set_value('desc')
            );
           
			if ($this->codegen_model->add('user_groups',$data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(base_url().'index.php/user_groups/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}		
		
		$this->load->view('header');  
		$this->load->view('user_groups_add', $this->data);   
		$this->load->view('footer');
        //$this->template->load('content', 'user_groups_add', $this->data);
    }	
    
    function edit(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('user_groups') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'name' => $this->input->post('name'),
					'desc' => $this->input->post('desc')
            );
           
			if ($this->codegen_model->edit('user_groups',$data,'gp_id',$this->input->post('gp_id')) == TRUE)
			{
				redirect(base_url().'index.php/user_groups/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->codegen_model->get('user_groups','gp_id,name,desc','gp_id = '.$this->uri->segment(3),NULL,NULL,true);
		
		$this->load->view('header');  
		$this->load->view('user_groups_edit', $this->data);	   
		$this->load->view('footer');
			
        //$this->template->load('content', 'user_groups_edit', $this->data);
    }
	
    function delete(){
            $ID =  $this->uri->segment(3);
            $this->codegen_model->delete('user_groups','gp_id',$ID);             
            redirect(base_url().'index.php/user_groups/manage/');
    }
}

/* End of file user_groups.php */
/* Location: ./system/application/controllers/user_groups.php */