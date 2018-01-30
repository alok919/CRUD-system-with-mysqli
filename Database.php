<?php 

	class Database{

		public $dbhost= DB_HOST ;
		public $dbuser=DB_USER  ;
		public $dbpass=DB_PASS  ;
		public $dbname= DB_NAME ;

		public $link;
		public $error;

		private function connectDB(){

			$this->link = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);

			if (!$this->link) {
				$this->error="Connection failed: " . $this->link->connect_error;
			}else{
				echo "Connected successfully";
			}
		}
	}













 ?>