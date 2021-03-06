<?php

class Posts_Model{

	function all($limited = null){
		$files = new Files_Model;
		$file_names = $files->get_files(POSTS_DB_PATH);
		$formatted_files = $files->scaffold_data(POSTS_DB_PATH, $file_names, $limited);
		return $formatted_files;
	}

	function show($id){
		$file = new Files_Model;
		return $file->find_register(POSTS_DB_PATH, $id);
	}
}