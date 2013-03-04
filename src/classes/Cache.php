<?php $base = new Base;
echo "\$base ".$base instanceof Base."\n";

class Cache 
{
	private $data;

	public function __construct($config)
	{
		ini_set('auto_detect_line_endings',TRUE);
		$this->db 			= $config->db;
		$this->source_type 	= $config->source_type;
		$this->source		= $config->source;
		$this->mode			= $config->mode;
		$this->message 		= $config->message;
	}
	public function init($message, $mode)
	{
		if(isset($_POST['cache'])){
			Base::_e($message, $this);
		}
		$ds 	= $this->openDataSource('csv', $this->source);
		$data 	= $this->readDataSource('csv', $ds);

		Base::_e($data, $this);
		$this->data = $data;
		return $this;
	}
	public function openDataSource($type, $dataSource)
	{
		switch($type)
		{
			case 'csv':
				return fopen($dataSource, 'r');
			break;
		}
	}
	public function readDataSource($type, $dataSource)
	{
		switch($type){
			case 'csv': 
				$data = array();
				while(($ret = fgetcsv($dataSource, 1000, ',')) !== FALSE){
					$data[] = $ret;
				}
				return $data;
			break;
			
			case 'Web Service':

				return 'Web Service';
			break;

			case 'db':
				return 'db';
			break;

		}
		return $array;	
	}
	public function getData()
	{
		return $this->data;
	}
	public function validateDataSourceFormat($dataSource)
	{
		//detect how many levels deep the array goes.
		return true;
	}
}