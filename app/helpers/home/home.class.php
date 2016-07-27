<?php

class Home_Helper{
	

	function prev_text($text, $limit){
		$contador = strlen($text);
		if ( $contador >= $limit ) {      
			$text = substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '...';
			return $text;
		}
		else{
			return $text;
		}
	} 
}