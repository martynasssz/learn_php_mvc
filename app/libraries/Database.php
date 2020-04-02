<?php
	/*
	 * PDO Database Class
	 * Connect to database
	 * Create prepared statemets
	 * Bind values
	 * Return rows and results
	 */

	class Database {
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $dbname = DB_NAME;

		private $dbh; // DB handler when prepare statement
		private $stmt;
		private $error;

		public function __construct(){
			// Set DSN
			$dsn = 'mysql:host=' . $this->host . ';dbname ='. $this->dbname;
			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  //three modes:silent, warning, exeptions
			);

			// Create PDO instance
			try {
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
				echo 'Connected successfully';
			} catch(PDOExeption $e) {
				$this->error = $e->getMessage();
				echo $this->error;
			}

		}
	}
