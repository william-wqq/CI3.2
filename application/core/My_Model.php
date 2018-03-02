<?php
	/**
	 * Created by PhpStorm.
	 * User: Administrator
	 * Date: 2018/2/27
	 * Time: 16:32
	 */
	
	class My_Model extends CI_Model
	{
		public function __construct()
		{
			//用于多个数据库连接
			//$this->mydb1 = $this->load->database('test1', true);
			//$this->mydb2 = $this->load->database('test2', true);
			
			
			//一个数据库，默认$active_group='test'
			//$this->db = $this->load->database('test');
			//$this->db = $this->load->database();
		}
		
	}