<?php 

/**
* 
*/
class User_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get()
	{
		echo "GET";
	}

	public function post()
	{
		echo "POST";
	}

	public function put()
	{
		echo "PUT";
	}

	public function delete()
	{
		echo "DELETE";
	}
}

?>