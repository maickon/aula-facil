<?php

		$tag->div('class="footer" href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"');
			$tag->div('class="container"');
				$tag->p('class="pull-left"');
					$tag->a('href="http://dzyngiri.com"');
						$tag->printer('www.aulafacil.com');
					$tag->a;
				$tag->p;
			
				$tag->p('class="pull-right"');
					$tag->a('href="#myModal" role="button" data-toggle="modal"'); 
						$tag->i('class="icon-mail"');$tag->i; 
						$tag->printer('CONTACT');
					$tag->a;
				$tag->p;
			$tag->div;
		$tag->div;

		$tag->div('id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"');
			$tag->div('class="modal-header"');
				$tag->button('type="button" class="close" data-dismiss="modal" aria-hidden="true"');
					$tag->printer('×');
				$tag->button;
				
				$tag->h3('id="myModalLabel"');
					$tag->i('class="icon-mail"');$tag->i; 
					$tag->printer('Contact Me');
				$tag->h3;
			$tag->div;
			
			$tag->div('class="modal-body"');
				$tag->form('action="#"');
					$tag->iput('type="text" placeholder="Yopur Name"');
					$tag->iput('type="text" placeholder="Your Email"');
					$tag->iput('type="text" placeholder="Website (Optional)"');
					$tag->textarea('rows="3" style="width:80%"'); $tag->textarea;
					$tag->br;
					$tag->button('type="submit" class="btn btn-large"');
					$tag->i('class="icon-paper-plane"');$tag->i; 
					$tag->printer('SUBMIT');
					$tag->button;
				$tag->form;
			$tag->div;
		$tag->div;

		// <!-- CORE JS -->
		$_JS = [JS_JQUERY,
				JS_BOOTSTRAP
				];
		foreach ($_JS as $key => $value) {
		    $tag->script('src="' . $value . '"'); 
		    $tag->script;
		}

		$tag->script();
			$tag->printer('$(\'#myModal\').modal(\'hidden\')');
		$tag->script;

	$tag->body;
$tag->html;