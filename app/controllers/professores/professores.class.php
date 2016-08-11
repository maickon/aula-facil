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

	function form(){
		$tag = new Tags_Lib;
		require (new Render_Lib('professor/form'))->get_required_path();
	}

	function cadastrosecreto(){
		$tag = new Tags_Lib;
		$professor_helper = new Professor_Helper;
		$disciplinas_helper  = explode("\n", (new Disciplinas_Helper())->disciplinas_list());
		require (new Render_Lib('professor/new'))->get_required_path();
	}

	function save(){
		$tag = new Tags_Lib;
		$fields = [
			'nome'=>'Nome::',
			'disciplinas'=>'Disciplinas::',
			'valor_hora'=>'Valor Hora::',
			'telefone'=>'Telefone::',
			'email'=>'Email::',
			'local'=>'Local::',
			'img_link'=>'Profile URI::', 
			'formacao'=>'Formação::',
			'sobre'=>'Sobre::'		
			];
		
		$str = '';
		$str_html = '';
		unset($_REQUEST['url']);
		foreach ($_REQUEST as $key => $value) {
			if ($key == 'sobre') {
				$str .= "{$fields[$key]}{$value}";
			} else {
				$str .= "{$fields[$key]}{$value}\n";
			}
			
			$str_html .= "<b>{$fields[$key]}</b><i>{$value}</i><br>";

		}

		$file_name = md5(uniqid(""));

		if (file_put_contents(URL_BASE_INTERNAL.PROFESORES_DB_PATH.$file_name.'.txt', $str)) {
			$tag->div('class="container"');
				$tag->h1();
					$tag->printer(YOUR_DATA_LABEL);
				$tag->h1;

				$tag->p();
					$tag->printer($str_html);
				$tag->p;
			$tag->div;
		 }
		
	}
}