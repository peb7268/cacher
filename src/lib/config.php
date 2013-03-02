<?php
$config = new StdClass();
$config->db 			= 'cache_testing';
$config->source_type 	= 'csv';
$config->source 		= 'assets/sales_info.csv';
$config->mode 			= 'dev';
$config->message 		= "caching info to the <strong>".
						  $config->db."</strong> db from a <strong>".
						  $config->source_type."</strong> at: <strong>".
						  $config->source."</strong>";
