<?php
	class Pages extends Controller { //defautinis controleris
		public function __construct(){
			//echo 'Pages loaded';
		}

		public function index(){ //sis metodas reikalingas, kad uzkrovus puspapi nebutu erroro
			
			//$this->view('hello'); // get answer in browser View does not exist, because not hello.php inside views

			//$this->view('pages/index'); //uzkraus HOMEPAGE nes padavem i view index.php faila
			
			//$this->view('pages/index', ['title' => 'Welcome']);//pass data to array

			$data = [
				'title' => 'Welcome'
			];

			$this->view('pages/index', $data); //masyva iskelem atskirai, padavem tik kitamaji

		}

		public function about(){ //id uzkomentuojamas
			//echo $id;
			$this->view('pages/about'); //http://localhost/oop/mvc/pages/about gausime ABOUT
		}
	}

	
