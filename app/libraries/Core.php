<?php
	/*
	 * App Core Class
	 * Creates URL $ loads core controller
	 * URL FORMAT - /controller/method/params
	 *
	 */

	class Core {
		protected $currentCpntroller = 'Pages'; //jei i url irasysime mvc/ ukraus pages controlery
		protected $currentMethod = 'index';
		protected $params = []; //prilyginam tusciam masyvui pagal nutylejima

		public function __construct(){
			$this->getUrl(); //ivykdysim funkcija kai sukursime nauja objekta //index.php faile
		}

		public function getUrl(){
			echo $_GET['url'];	} //gauname infor is url uz klaustuko
	}





