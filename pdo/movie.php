<?php 

	class movie
	{
		public $id, $name ,$cast,$plot,$categoryid,$Releasedate,$active;
		
		function __construct()
		{

		}

		public function save()
		{
			// insert
		}
		public function selectAll()
		{
			//select * from tbl 
		} 
		public function selectById()
		{
			//select * from tbl where id =$id
		}

		public function update()
		{
			//update
		}

		public function delete()
		{
			// update set active =0
		}

		public function revert()
		{
			// update set active =0
		}

		public static function fetchall($con)
		{	
			return $con->getdata('movie','movie');
		}

	}	


// 	movie::fetchall();	 
// // classname::staticfunction 

// 	$movie->save()
// //	object->function
 ?>