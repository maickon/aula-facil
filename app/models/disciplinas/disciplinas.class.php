<?php

class Disciplinas_Model{
	
	function all_discipline($limited = null){
		$files = new Files_Model;
		$file_names = $files->get_files(PROFESORES_DB_PATH);
		$formatted_files = $files->scaffold_data(PROFESORES_DB_PATH, $file_names, $limited);
		return $this->formated_list($formatted_files);	
	}

	function formated_list($formatted_files_list){
		$disciplines = array();
		foreach ($formatted_files_list as $key => $value) {
			$divide_names = explode(',', $value['Disciplinas']);
			if (count($divide_names) > 0) {
				foreach ($divide_names as $key => $value) {
					$disciplines[] = trim($value);
				}
			}
		}
		return (array_unique($disciplines));
	}

	function list_all_by_discipline($discipline){
		$files = new Files_Model;
		$file_names = $files->get_files(PROFESORES_DB_PATH);
		return $files->list_teacher_by_discipline(PROFESORES_DB_PATH, $file_names, $discipline);
	}
}