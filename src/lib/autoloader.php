<?php 
//echo "autoloader found \n\n";
function autoloadSrc($class)
{
	//echo "a src was autoloaded \n";
	$filename = dirname(dirname(__file__)).'/classes/'.$class.'.php';
	if(is_readable($filename)){
		require $filename;	
	} else {
		//echo $filename." was not readable. Check your path. \n\n";
	}
	

}
function autoloadTests($class)
{
	//echo "a test was autoloaded \n";
	$filename = dirname(dirname(__file__)).'/classes/'.$class.'.php';
	if(is_readable($filename)){
		require $filename;	
	} else {
		//echo $filename." was not readable. Check your path. \n\n";
	}
}
