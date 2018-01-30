<?php 

	class Database{

		public $dbhost= DB_HOST ;
		public $dbuser=DB_USER  ;
		public $dbpass=DB_PASS  ;
		public $dbname= DB_NAME ;

		public $link;
		public $error;


		public function __construct(){

			$this->connectDB();
		}

		private function connectDB(){

			$this->link = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);

			if (!$this->link) {
				$this->error="Connection failed: " . $this->link->connect_error;
				return false;
			}

			}

			public function select($query){

				$result=$this->link->query($query) or die($this->link->error.__LINE__);
				if ($result->num_rows >0) {
					
					return $result;
				}else{

					return false;
				}
			}


			public function insert($query){

				$insert_row=$this->link->query($query) or die($this->link->error.__LINE__);

				if ($insert_row) {
					header("Location:index.php?msg=".urlencode('Data inserted successfully'));
					exit();
				}else{
					die("Error :(".$this->link->errno.")".$this->link->error);
				}
			}
		}
	













 ?>