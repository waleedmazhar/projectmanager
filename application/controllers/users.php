<?php

class Users extends CI_Controller {
    
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
        $config['base_url'] = base_url().'index.php/users/manage/';
        $config['total_rows'] = $this->codegen_model->count('users');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->codegen_model->get('users','id,username,password,firstname,middlename,lastname,email,address,phone,mobile,gender,group_id','',$config['per_page'],$this->uri->segment(3));
		
		$this->load->view('header');  
		$this->load->view('users_list', $this->data); 
		$this->load->view('footer');  
       
	   
       //$this->template->load('content', 'users_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('users') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'username' => set_value('username'),
					'password' => set_value('password'),
					'firstname' => set_value('firstname'),
					'middlename' => set_value('middlename'),
					'lastname' => set_value('lastname'),
					'email' => set_value('email'),
					'address' => set_value('address'),
					'phone' => set_value('phone'),
					'mobile' => set_value('mobile'),
					'gender' => set_value('gender'),
					'group_id' => set_value('group_id')
            );
           
			if ($this->codegen_model->add('users',$data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(base_url().'index.php/users/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}		   
		$this->load->view('header');  
		$this->load->view('users_add', $this->data);   
		$this->load->view('footer');  
        //$this->template->load('content', 'users_add', $this->data);
    }	
    
    function edit(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('users') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'firstname' => $this->input->post('firstname'),
					'middlename' => $this->input->post('middlename'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
					'mobile' => $this->input->post('mobile'),
					'gender' => $this->input->post('gender'),
					'group_id' => $this->input->post('group_id')
            );
           
			if ($this->codegen_model->edit('users',$data,'id',$this->input->post('id')) == TRUE)
			{
				redirect(base_url().'index.php/users/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->codegen_model->get('users','id,username,password,firstname,middlename,lastname,email,address,phone,mobile,gender,group_id','id = '.$this->uri->segment(3),NULL,NULL,true);
		
		$this->load->view('header');  
		$this->load->view('users_edit', $this->data);
		$this->load->view('footer');  
				
        //$this->template->load('content', 'users_edit', $this->data);
    }
	
    function delete(){
            $ID =  $this->uri->segment(3);
            $this->codegen_model->delete('users','id',$ID);             
            redirect(base_url().'index.php/users/manage/');
    }
	


}

/* End of file users.php */
/* Location: ./system/application/controllers/users.php */