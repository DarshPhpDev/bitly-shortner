<?php 

namespace DarshPhpDev\BitlyShortner;

use Illuminate\Support\ServiceProvider;

class BitlyServiceProvider extends ServiceProvider {
	
	public function boot()
	{
	    $this->publishes([
	        __DIR__ . '/config/bitlyconfig.php' => config_path('bitlyconfig.php'),
	    ], 'bitlyconfig');
	}

	public function register()
	{
		$this->mergeConfigFrom(
		    __DIR__.'/config/bitlyconfig.php', 'bitlyconfig'
		);
	}

}