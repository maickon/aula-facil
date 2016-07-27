<?php
class Flashmsg_Lib{
	
	private $form;
	private $css_class;
	
	function __construct($type = '', $msg = ''){
		$this->form = new Form_Lib();
		
		switch($type):
			case 'success': 
				$this->css_class = 'alert alert-success';
				$this->alert($msg);
			break;
			
			case 'info': 
				$this->css_class = 'alert alert-info'; 
				$this->alert($msg);
			break;
			
			case 'warning': 
				$this->css_class = 'alert alert-warning'; 
				$this->alert($msg);
			break;
			
			case 'danger': 
				$this->css_class = 'alert alert-danger';
				$this->alert($msg);
			break;
		endswitch;
	}
	
	function alert($msg){
		$this->form->_div(['class'=>$this->css_class.' col-md-12', 'role'=>'alert']);
			echo $msg;
		$this->form->div_();
	}
}