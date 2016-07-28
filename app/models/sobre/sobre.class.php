<?php

Class Sobre_Model{
	
	function about_site(){
		$file = new Files_Model;
		$files = $file->get_files(ABOUT_DB_PATH);
		return $file->get_unique_file(ABOUT_DB_PATH, $files);
	}
}