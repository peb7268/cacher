<?php function my_autoloader($class)
{
	require __DIR__.'/../classes/'.$class.'.php';
}
spl_autoload_register('my_autoloader');

