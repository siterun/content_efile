<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config =array(
		"base_url" => "http://itzmyparlour.com/loginfgt/hybridauth/index.php", 
		"providers" => array ( 

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "436206645444-iffibb4bmp8888ksct88793dsgj11orc.apps.googleusercontent.com", "secret" => "hqw2bIyH5zCQIxE_vp0fzlPZ" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "1608538289410862", "secret" => "0ae9629208a5a360e6cfd87ab08670fd" ), 
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "jfbz3P0t6ut6qK1O9l2tcWSs7", "secret" => "z7GWRs1xAudPgEY16hzLfh4cAIy4HofoDl6CzKhfzYU6AcvhRa" ) 
			),
		),
		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,
		"debug_file" => "",
	);
