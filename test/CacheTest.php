<?php require __DIR__ . '/../src/lib/autoloader.php';
//Hookup PSR Autoloading

class CacheTest extends PHPUnit_Framework_TestCase {
	public $cache;

	public function setUp(){
		$config = new StdClass();
		$config->db 			= 'cache_testing';
		$config->source_type 	= 'csv';
		$config->source 		= './src/assets/sales_info.csv';
		$config->message 		= "caching info to the <strong>".$config->db."</strong> db from a <strong>".$config->source_type."</strong> at: <strong>".$config->source."</strong>";

		$this->cache = new Cache($config);
	}
	public function test__construct(){
		$this->assertEquals(gettype($this->cache), 'object');
		$this->assertEquals($this->cache->db, 'cache_testing');
		$this->assertEquals($this->cache->source_type, 'csv');
	}
	public function test__init(){
		$ds = $this->cache->openDataSource('csv', $this->cache->source);
		$data = $this->cache->readDataSource('csv', $ds);

		$this->assertEquals(gettype($this->cache->message), 'string');
		$this->assertEquals($this->cache->db, 'cache_testing');
		
		$this->assertEquals(gettype($ds), 'resource');
		$this->assertEquals(gettype($data), 'array');
	}
	public function test_openDataSource()
	{	
		$ds = $this->cache->openDataSource('csv', $this->cache->source);
		$this->assertInternalType('resource', $ds);
	}
	public function test_readDataSource()
	{	
		$ds = $this->cache->openDataSource('csv', './src/assets/sales_info.csv');
		$data = $this->cache->readDataSource('csv', $ds);
		$this->assertInternalType('array', $data);
	}
}