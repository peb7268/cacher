<?php echo "config file found \n\n";
require __dir__.'/autoloader.php';
spl_autoload_register('autoloadSrc');

$config = new StdClass;
$config->db_name 		= 'cache_testing';
$config->source_type 	= 'csv';
$config->source 		= 'assets/sales_info.csv';
$config->mode 			= 'dev'; //dev or prod
$config->message 		= "caching info to the <strong>".
						  $config->db."</strong> db from a <strong>".
						  $config->source_type."</strong> at: <strong>".
						  $config->source."</strong>";

$config->db 			= new StdClass();
$config->db->host 		= 'localhost';
$config->db->driver 	= 'mysql';
$config->db->un 		= 'root';
$config->db->pw 		= '';
$config->db->message 	= "Connected to <strong>".$config->host."</strong> db that is type <strong>".$config->driver."</strong> with a un / pw of: <strong>".$config->un." / ". $config->pw."</strong>";

