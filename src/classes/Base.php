<?php 
class Base {
	public static function _e($message, $context)
	{	
		if($context->mode == 'dev'){
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
