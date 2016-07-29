<?php
class Professor_Model{

	function all($limited = null){
		$files = new Files_Model;
		$file_names = $files->get_files(PROFESORES_DB_PATH);
		$formatted_files = $files->scaffold_data(PROFESORES_DB_PATH, $file_names, $limited);
		return $files->rand_file_list($formatted_files, $limited);
	}

	function show($id){
		$file = new Files_Model;
		return $file->find_register(PROFESORES_DB_PATH, $id);
	}

	function find_by_discipline($discipline){
		$files = new Files_Model;
		$file_names = $files->get_files(PROFESORES_DB_PATH);
		return $files->find_teacher_by_discipline($discipline, $file_names);
	}
}