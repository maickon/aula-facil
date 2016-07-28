<?php

class Files_Model{
	
	function get_files($file_path){
		$files = scandir($file_path);
		unset($files[0]);
		unset($files[1]);
		return $files;
	}

	function get_unique_file($file_path, $files){
		$open_file = null;
		$new_files = array();

		foreach ($files as $key => $value) {
			if (file_exists("{$file_path}{$value}")) {
				$open_file = file_get_contents("{$file_path}{$value}");
			} else {
				echo '<b>Arquivo não encontrado.</b>';
			}
		}
		return $open_file;
	}

	function scaffold_post_data($file_path, $files, $limited){
		$formatted_files = array();
		$formatted_file = array();
		$new_files = array();

		if ($limited != null) {
			$keys = array_rand($files, $limited);

			foreach ($keys as $value) {
				$new_files[] = $files[$value];
			}
		} else {
			$new_files = $files;
		}

		foreach ($new_files as $key => $value) {
			if (file_exists("{$file_path}{$value}")) {
				$open_file = file_get_contents("{$file_path}{$value}");
				$file_name = $value;
				$array_file = explode("\n", $open_file);
				foreach ($array_file as $key => $value) {
					$array_file_line = explode('::', $value);
					$formatted_file[$array_file_line[0]] = $array_file_line[1];
					$formatted_file['id'] = explode('.', $file_name)[0];
				}
			} else {
				echo '<b>Arquivo não encontrado.</b>';
			}
			$formatted_files[] = $formatted_file;
		}
		return $formatted_files;
	}
	
	function scaffold_data($file_path, $files, $limited){	
		$formatted_files = array();
		$formatted_file = array();
		$new_files = array();

		if ($limited != null) {
			$keys = array_rand($files, $limited);

			foreach ($keys as $value) {
				$new_files[] = $files[$value];
			}
		} else {
			$new_files = $files;
		}

		foreach ($new_files as $key => $value) {
			if (file_exists("{$file_path}{$value}")) {
				$open_file = file_get_contents("{$file_path}{$value}");
				$file_name = $value;
				$array_file = explode("\n", $open_file);
				foreach ($array_file as $key => $value) {
					$array_file_line = explode('::', $value);
					$formatted_file[$array_file_line[0]] = $array_file_line[1];
					$formatted_file['id'] = explode('.', $file_name)[0];
				}
			} else {
				echo '<b>Arquivo não encontrado.</b>';
			}
			$formatted_files[] = $formatted_file;
		}
		return $formatted_files;
	}


	function find_register($file_path, $id){
		$formatted_file = array();
		if (file_exists("{$file_path}{$id}.txt")) {
			$open_file = file_get_contents("{$file_path}{$id}.txt");
			$array_file = explode("\n", $open_file);
			foreach ($array_file as $key => $value) {
				$array_file_line = explode('::', $value);
				$formatted_file[$array_file_line[0]] = $array_file_line[1];
				$formatted_file['id'] = $id;
			}
		} else {
			echo '<b>Arquivo não encontrado.</b>';
		}

		return $formatted_file;
	}

	function find_teacher_by_discipline($discipline, $files){
		$file_path = PROFESORES_DB_PATH;
		$formatted_files = array();
		$formatted_file = array();

		foreach ($files as $key => $value) {
			if (file_exists("{$file_path}{$value}")) {
				$open_file = file_get_contents("{$file_path}{$value}");
				$file_name = $value;
				$array_file = explode("\n", $open_file);
				// echo "/$discipline/". '--' . $array_file[1].'<br>';
				preg_match("/$discipline /", "aulas de Matemática ", $matches);
				if (!empty($matches)) {
					print_r($matches);
				} else {
					// echo 'chupal';
				}
				if (!empty($matches)) {
					foreach ($array_file as $key => $value) {
						$array_file_line = explode('::', $value);
						$formatted_file[$array_file_line[0]] = $array_file_line[1];
						$formatted_file['id'] = explode('.', $file_name)[0];
					}
				}
			} else {
				echo '<b>Arquivo não encontrado.</b>';
			}
			$formatted_files[] = $formatted_file;
		}

		return $formatted_files;
	}
}