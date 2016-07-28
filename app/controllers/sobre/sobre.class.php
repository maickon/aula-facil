<?php

class Sobre_Controller{
	
	function index(){
		$tag = new Tags_Lib; 
		$sobre = (new Sobre_Model)->about_site();
		require (new Render_Lib('sobre/index'))->get_required_path();
	}
}