<?php
function _e($message)
{	
	if($config->mode == 'dev'){
		echo $message;
	}
}