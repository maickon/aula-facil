<?php
/*
	class Rende_Lib
	faz require de forma mais elegante
*/

class Render_Lib{

	// path to be required
	private $required_path;

	function __construct($path = 'index', $folder = 'view'){
		$this->render($path, $folder);
	}

	function get_required_path(){
		return $this->required_path;
	}
	/*
		function render()
	*/

	function render($path, $folder){
		// define o caminho base da view
		$view_path = URL_BASE_INTERNAL . "app/{$folder}/";

		if (file_exists("{$view_path}{$path}.php")) {
			$this->required_path = "{$view_path}{$path}.php";
		} else {
			(new Errors_Lib())->show("A view no endereço {$path} não existe.");	
		}
		
	}
}