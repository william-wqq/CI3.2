<?php
	/**
	 * Created by PhpStorm.
	 * User: Administrator
	 * Date: 2018/2/27
	 * Time: 10:11
	 */
	
class User extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user', TRUE);
	}
	
	
/*	public function index() {
		
		$data['page_title'] = 'william';
		$string = $this->load->view('blog/index', $data);
	}*/
	
	public function index() {
		$all = $this->user->getAllUsers();
		var_dump($all);
	}
	
	
	public function _remap($method) {
		
		if(method_exists($this, $method))
			return $this->$method();
		else
			show_404();
	}
	
	
	
}
	
	