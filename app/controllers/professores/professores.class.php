<?php

class Professores_Controller{

	function view($id){
		$professor = new Professor_Model;
		$professor_view = $professor->show($id);
		$professores = $professor->all(3); 
		$tag = new Tags_Lib;
		require (new Render_Lib('professor/view'))->get_required_path();
	}

	function index(){
		$tag = new Tags_Lib;
		$helper = new Home_Helper;
		$all = (new Professor_Model)->all();
		require (new Render_Lib('professor/index'))->get_required_path();
	}

	function error(){
		$tag = new Tags_Lib;
		require (new Render_Lib('professor/error'))->get_required_path();
	}

	function novo(){
		$tag = new Tags_Lib;
		$helper_disciplinas = explode("\n", (new Disciplinas_Helper())->disciplinas_list());
		$helper = new Professor_Helper;
		require (new Render_Lib('professor/new'))->get_required_path();
	}

	function save(){
		return print_r($_REQUEST);
	}
}