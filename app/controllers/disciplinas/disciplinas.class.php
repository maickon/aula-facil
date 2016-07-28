<?php

class Disciplinas_Controller{
	
	function index(){
		$discipline = (new Disciplinas_Model)->all_discipline();
		$tag = new Tags_Lib;
		require (new Render_Lib('disciplinas/index'))->get_required_path();
	}

	function view($discipline){
		$tag = new Tags_Lib;
		$helper = new Home_Helper;
		$disciplines = (new Disciplinas_Model)->list_all_by_discipline($discipline);
		require (new Render_Lib('disciplinas/view'))->get_required_path();
	}
}