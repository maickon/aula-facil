<?php

class Posts_Controller{

	function index(){
		$tag = new Tags_Lib;
		$helper = new Home_Helper;
		$all = (new Posts_Model)->all();
		require (new Render_Lib('posts/index'))->get_required_path();
	}

	function view($id){
		$post = new Posts_Model;
		$posts_view = $post->show($id);
		$tag = new Tags_Lib;
		require (new Render_Lib('posts/view'))->get_required_path();
	}

	function error(){
		$tag = new Tags_Lib;
		require (new Render_Lib('posts/error'))->get_required_path();
	}
}