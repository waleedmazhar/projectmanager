<?php

class Modules_actions extends CI_Controller {
    
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
        $config['base_url'] = base_url().'index.php/modules_actions/manage/';
        $config['total_rows'] = $this->codegen_model->count('modules_actions');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->codegen_model->get('modules_actions','access_id,module_name,action_name,status','',$config['per_page'],$this->uri->segment(3));
       
	   $this->load->view('modules_actions_list', $this->data); 
       //$this->template->load('content', 'modules_actions_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('modules_actions') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'module_name' => set_value('module_name'),
					'action_name' => set_value('action_name'),
					'status' => set_value('status')
            );
           
			if ($this->codegen_model->add('modules_actions',$data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(base_url().'index.php/modules_actions/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}		   
		$this->load->view('modules_actions_add', $this->data);   
        //$this->template->load('content', 'modules_actions_add', $this->data);
    }	
    
    function edit(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('modules_actions') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'module_name' => $this->input->post('module_name'),
					'action_name' => $this->input->post('action_name'),
					'status' => $this->input->post('status')
            );
           
			if ($this->codegen_model->edit('modules_actions',$data,'access_id',$this->input->post('access_id')) == TRUE)
			{
				redirect(base_url().'index.php/modules_actions/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->codegen_model->get('modules_actions','access_id,module_name,action_name,status','access_id = '.$this->uri->segment(3),NULL,NULL,true);
		
		$this->load->view('modules_actions_edit', $this->data);		
        //$this->template->load('content', 'modules_actions_edit', $this->data);
    }
	
    function delete(){
            $ID =  $this->uri->segment(3);
            $this->codegen_model->delete('modules_actions','access_id',$ID);             
            redirect(base_url().'index.php/modules_actions/manage/');
    }
}

/* End of file modules_actions.php */
/* Location: ./system/application/controllers/modules_actions.php */