<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	
	public function comments()
	{
	    echo 'This is the comment page';
	}
}
?>