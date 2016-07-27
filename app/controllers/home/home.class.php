<?php

class Home_Controller{
	
	function index(){
		$home_helper = new Home_Helper;
		$home = new Home_Model();
		$tag = new Tags_Lib;
		$professor = new Professor_Model;
		$professores = $professor->all();
		require (new Render_Lib('home/index'))->get_required_path();
	}
}