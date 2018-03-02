<?php
	/**
	 * Created by PhpStorm.
	 * User: Administrator
	 * Date: 2018/2/27
	 * Time: 16:23
	 */

class User_model extends My_Model
{
	private static $tableName = 'users';
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * 获取用户
	 * @return mixed
	 */
	public function getAllUsers() {
		
		return $this->db->get(self::$tableName)->result();
	}
	
	public function getOne() {
	
	
	}
}