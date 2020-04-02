<?php
	class Pages extends Controller { //defautinis controleris
		public function __construct(){
			//echo 'Pages loaded';
			/////----------------------This class just for example -----------------------/////
			$this->postModel = $this->model('Post'); //load model
			/////----------------------This class just for example -----------------------/////
		}

		public function index(){ //sis metodas reikalingas, kad uzkrovus puspapi nebutu erroro
			
			//$this->view('hello'); // get answer in browser View does not exist, because not hello.php inside views

			//$this->view('pages/index'); //uzkraus HOMEPAGE nes padavem i view index.php faila
			
			//$this->view('pages/index', ['title' => 'Welcome']);//pass data to array
			$posts = $this->postModel->getPosts();

			$data = [
				'title' => 'Welcome',
				'posts' => $posts //paduodame duomenis
			];



			$this->view('pages/index', $data); //masyva iskelem atskirai, padavem tik kitamaji

		}

		public function about(){ //id uzkomentuojamas
			//echo $id;
			$data = [
				'title' => 'About us'
			];
			
			$this->view('pages/about', $data); //http://localhost/oop/mvc/pages/about gausime ABOUT
		}
	}

	
