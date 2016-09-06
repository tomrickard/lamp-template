<?php 
/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index($foo = 'boo')
	{
		$method = $this->input->method();
		switch ($method) {
			case 'get':
			print_r($this->input->get());
			echo $foo;
				$this->user_model->get();
				break;

			case 'post':
				$this->user_model->post();
				break;

			case 'put':
				$this->user_model->put();
				break;

			case 'delete':
				$this->user_model->delete();
				break;
			
			default:
				# code...
				break;
		}
		// print_r($this->input->get());
		// print_r($this->input->post())
		// echo "hello world";
		// print_r($this->input->get());
		// print_r($this->input->post());
	}

	public function test($value='')
	{
		echo $value;
	}
}
?>