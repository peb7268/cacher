<?php 
class Cache 
{
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
			$this->_e($message);
		}
		$ds 	= $this->openDataSource('csv', $this->source);
		$data 	= $this->readDataSource('csv', $ds);

		$this->_e($data);
		return $data;
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
	public function validateDataSourceFormat($dataSource)
	{
		//detect how many levels deep the array goes.
		return true;
	}
	public function _e($message)
	{	
		if($this->mode == 'dev'){
			if(gettype($message) == 'string')
			{
				echo $message.'<br>';
			} else {
				echo '<pre>';
					print_r($message);
				echo '</pre>';
			}
		}
	}
}