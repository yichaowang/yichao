<?php
class Home extends CI_Controller {

	public function index()
	{                      
		/*
		$this->load->library('session');

				try 
				{
					//create or open the database
					$con = new SQLiteDatabase('private/log.sqlite', 0666, $error);
				}
				catch(Exception $e) 
				{
					die($error);
				}     
				
				$stm = "CREATE TABLE Friends(Id integer PRIMARY KEY," . 
					"Name text UNIQUE NOT NULL, Sex text CHECK(Sex IN ('M', 'F')))";
				$ok = sqlite_exec($con, $stm, $error);

				if (!$ok)
					die("Cannot execute query. $error");

				echo "Database Friends created successfully";

				sqlite_close($con);  */
		
		
		
		$this->load->view('home_view');
	}
	
	public function comments()
	{
	    echo 'This is the comment page';
	}
}
?>