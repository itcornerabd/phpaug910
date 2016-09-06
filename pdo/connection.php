<?php 
	/**
	* 
	*/
	class connection 
	{
		public $pdo;

		function __construct()
		{

			$pdo=new PDO('mysql:host=localhost;dbname=demo','root','');
			$this->pdo= $pdo;
		}

		public function getdata($tablename,$classname)
		{

			$statement =$this->pdo->prepare("select * from $tablename");
			$statement->execute();
			$movies=$statement->fetchAll(PDO::FETCH_CLASS,$classname);
			return $movies; 	
		}

	}
 ?>
