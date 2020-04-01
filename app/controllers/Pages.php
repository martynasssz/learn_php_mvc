<?php
	class Pages extends Controller { //defautinis controleris
		public function __construct(){
			//echo 'Pages loaded';
		}

		public function index(){ //sis metodas reikalingas, kad uzkrovus puspapi nebutu erroro
			//$this->view('hello'); // get answer in browser View does not exist, because not hello.php inside views
		}

		public function about($id){
			echo $id;
		}
	}

	
