<?php 
class DbTest extends PHPUnit_Framework_TestCase 
{
	public $db;

	public function setUp()
	{
		$config 				= new StdClass();
		$config->db 			= new StdClass();
		$config->db->host 		= 'cache_testing';
		$config->db->driver 	= 'mysql';
		$config->db->un 		= './src/assets/sales_info.csv';
		$config->db->pw 		= "Connected to <strong>".$config->host."</strong> db that is type <strong>".$config->driver."</strong> with a un / pw of: <strong>".$config->un." / ". $config->pw."</strong>";

		$this->db = new Db($config->db);
	}

	public function test__construct()
	{	
		$this->assertEquals('mysql', $this->db->config->driver);
		$this->assertInternalType('object', $this->db);
	}

}

