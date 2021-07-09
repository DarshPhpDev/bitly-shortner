<?php 

if(!function_exists('getBitlyToken')){
	function getBitlyToken()
	{
		return config('bitlyconfig.token');
	}
}

