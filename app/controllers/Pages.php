<?php
	class Pages { //defautinis controleris
		public function __construct(){
			//echo 'Pages loaded';
		}

		public function index(){ //sis metodas reikalingas, kad uzkrovus puspapi nebutu erroro

		}

		public function about($id){
			echo $id;
		}
	}

	
