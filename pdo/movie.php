<?php 

	class movie
	{
		public $id, $name ,$cast,$plot,$categoryid,$Releasedate,$active;
		function __construct($name)
		{
			$this->name =$name;
			$this->active=true;	
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

	}	

	// $rustom  =  new movie('Rustom'); 
	// $rustom->cast = 'Akshy Kumar';
	// $rustom->plot= 'asdasd';
	// $rustom->categoryid =1;
	// $rustom->Releasedate=date('Y-m-d');
	// var_dump($rustom);

	 

 ?>