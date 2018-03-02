<?php
	/**
	 * Created by PhpStorm.
	 * User: Administrator
	 * Date: 2018/2/27
	 * Time: 10:22
	 */
	
	class Index extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		
		public function index() {
			
			echo 'admin derectory';
		}
	}