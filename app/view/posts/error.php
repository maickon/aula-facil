<?php
$tag->div('class="container"');
	$tag->div('class="row"');
		$tag->div('class="col-md-12"');
			$tag->h1();
				$tag->printer(ERROR_404);
			$tag->h1;
			
			$tag->br();

			$tag->div('class="col-md-4"');
				$tag->p();
					$tag->span('class="post-title"');
						$tag->a('href="'.TEACHERS_URL.'" class="title"');
							$tag->printer(OPTION_GO_TEACHER);
						$tag->a;
					$tag->span;
				$tag->p;
			$tag->div;

			$tag->div('class="col-md-4"');
				$tag->p();
					$tag->span('class="post-title"');
						$tag->a('href="'.URL_BASE.'" class="title"');
							$tag->printer(OPTION_GO_HOME);
						$tag->a;
					$tag->span;
				$tag->p;
			$tag->div;

			$tag->div('class="col-md-4"');
				$tag->p();
					$tag->span('class="post-title"');
						$tag->a('href="'.SUBJECTS_URL.'" class="title"');
							$tag->printer(OPTION_GO_DISCIPLINES);
						$tag->a;
					$tag->span;
				$tag->p;
			$tag->div;
		$tag->div;
	$tag->div;
$tag->div;
