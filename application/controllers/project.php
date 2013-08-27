<?php

class Project extends CI_Controller {
    
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
        $config['base_url'] = base_url().'index.php/project/manage/';
        $config['total_rows'] = $this->codegen_model->count('project');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->codegen_model->get('project','project_id,name,nature,targetaudience,examplesites,looknfeel,websitetitle,slogan,contactinfo,socialnetworkinglinks,backgroundtype,colorscheme,bodylayouts,innerpagelayout,navigationmenu,designdescription,assets,headerimages,logoimages,otherstuff,status','',$config['per_page'],$this->uri->segment(3));
       
	   $this->load->view('header');
	   $this->load->view('project_list', $this->data);
	   $this->load->view('footer'); 
       //$this->template->load('content', 'project_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('project') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'name' => set_value('name'),
					'nature' => set_value('nature'),
					'targetaudience' => set_value('targetaudience'),
					'examplesites' => set_value('examplesites'),
					'looknfeel' => set_value('looknfeel'),
					'websitetitle' => set_value('websitetitle'),
					'slogan' => set_value('slogan'),
					'contactinfo' => set_value('contactinfo'),
					'socialnetworkinglinks' => set_value('socialnetworkinglinks'),
					'backgroundtype' => set_value('backgroundtype'),
					'colorscheme' => set_value('colorscheme'),
					'bodylayouts' => set_value('bodylayouts'),
					'innerpagelayout' => set_value('innerpagelayout'),
					'navigationmenu' => set_value('navigationmenu'),
					'designdescription' => set_value('designdescription'),
					'assets' => set_value('assets'),
					'headerimages' => set_value('headerimages'),
					'logoimages' => set_value('logoimages'),
					'otherstuff' => set_value('otherstuff'),
					'status' => set_value('status')
            );
           
			if ($this->codegen_model->add('project',$data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(base_url().'index.php/project/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}	
		$this->load->view('header');	   
		$this->load->view('project_add', $this->data);  
		$this->load->view('footer'); 
        //$this->template->load('content', 'project_add', $this->data);
    }	
    
    function edit(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('project') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'name' => $this->input->post('name'),
					'nature' => $this->input->post('nature'),
					'targetaudience' => $this->input->post('targetaudience'),
					'examplesites' => $this->input->post('examplesites'),
					'looknfeel' => $this->input->post('looknfeel'),
					'websitetitle' => $this->input->post('websitetitle'),
					'slogan' => $this->input->post('slogan'),
					'contactinfo' => $this->input->post('contactinfo'),
					'socialnetworkinglinks' => $this->input->post('socialnetworkinglinks'),
					'backgroundtype' => $this->input->post('backgroundtype'),
					'colorscheme' => $this->input->post('colorscheme'),
					'bodylayouts' => $this->input->post('bodylayouts'),
					'innerpagelayout' => $this->input->post('innerpagelayout'),
					'navigationmenu' => $this->input->post('navigationmenu'),
					'designdescription' => $this->input->post('designdescription'),
					'assets' => $this->input->post('assets'),
					'headerimages' => $this->input->post('headerimages'),
					'logoimages' => $this->input->post('logoimages'),
					'otherstuff' => $this->input->post('otherstuff'),
					'status' => $this->input->post('status')
            );
           
			if ($this->codegen_model->edit('project',$data,'project_id',$this->input->post('project_id')) == TRUE)
			{
				redirect(base_url().'index.php/project/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->codegen_model->get('project','project_id,name,nature,targetaudience,examplesites,looknfeel,websitetitle,slogan,contactinfo,socialnetworkinglinks,backgroundtype,colorscheme,bodylayouts,innerpagelayout,navigationmenu,designdescription,assets,headerimages,logoimages,otherstuff,status','project_id = '.$this->uri->segment(3),NULL,NULL,true);
		
		$this->load->view('header');
		$this->load->view('project_edit', $this->data);	
		$this->load->view('footer');	
        //$this->template->load('content', 'project_edit', $this->data);
    }
	
    function delete(){
            $ID =  $this->uri->segment(3);
            $this->codegen_model->delete('project','project_id',$ID);             
            redirect(base_url().'index.php/project/manage/');
    }
}

/* End of file project.php */
/* Location: ./system/application/controllers/project.php */