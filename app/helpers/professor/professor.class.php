<?php
class Professor_Helper{

	function input_label_form($label, $placeholder, $name, $type = 'text'){
		global $tag;
		$tag->div('class="form-group"');
			$tag->label('for="input_'.$name.'"');
				$tag->printer($label);
			$tag->label;
		    $tag->input('type="'.$type.'" name="'.$name.'" required class="form-control" id="input_'.$name.'" placeholder="'.$placeholder.'"');
			$tag->p('class="'.$name.'-msg"');
		    $tag->p;
		$tag->div;
	}

	function text_label_form($label, $placeholder, $name){
		global $tag;
		$tag->div('class="form-group"');
			$tag->label('for="input_'.$name.'"');
				$tag->printer($label);
			$tag->label;
		    $tag->printer('<textarea name="'.$name.'" required class="form-control" id="input_'.$name.'" placeholder="'.$placeholder.'" rows="5"></textarea>');
		    $tag->p('class="'.$name.'-msg"');
		    $tag->p;
		$tag->div;
	}

	function select_label_form($label, $name, $select){
		global $tag;
		$tag->div('class="form-group"');
			$tag->label('for="input_'.$name.'"');
				$tag->printer($label);
			$tag->label;

		    $tag->select('name="'.$name.'" required title="'.DESCRIPTION_SUBJECTS_LABEL.'" class="selectpicker" data-live-search="true" multiple id="input_'.$name.'"');
		    	foreach ($select as $key => $value) {
		    		$tag->option();
		    			$tag->printer($value);
		    		$tag->option;
		    	}
		    $tag->select;
		    $tag->p('class="'.$name.'-msg"');
		    $tag->p;
		$tag->div;	
	}
}