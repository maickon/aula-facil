<?php

class Disciplinas_Helper{
	
	function disciplinas_list(){
		return file_get_contents(DISCIPLINAS_PATH);
	}
}
