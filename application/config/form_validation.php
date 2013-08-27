<?php

$config = array(
             	


             	'privileges' => array()
			   
			   
				,

				'modules_actions' => array(array(
                                	'field'=>'module_name',
                                	'label'=>'Module_name',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'action_name',
                                	'label'=>'Action_name',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'status',
                                	'label'=>'Status',
                                	'rules'=>'required|trim|xss_clean'
                                ))
			   );
			   
?>