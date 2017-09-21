<?php
// toutes les variables de configuration
// 

return [
	/*
	| Application Name
	*/
	'name' => 'IdeaCMS',

	/*
	| Application Environment
	*/
	'env' => env('APP_ENV', 'production'),

	/*
	| Application Debug Mode
	*/
	'debug' => env('APP_DEBUG', false),

	/*
	| Application URL
	*/
	'url' => env('APP_URL', 'http://localhost'),

	/*
	| Application Timezone
	*/
	'timezone' => 'UTC',

	/*
	| Application Locale Configuration
	*/
	'locale' => 'en',

	/*
	| Encryption Key
	*/
	'key' => env('APP_KEY'),

	'cipher' => 'AES-256-CBC',

	/*
	| Logging Configuration
	|
	| Here you may configure the log settings for your application. Out of
	| the box, Laravel uses the Monolog PHP logging library. This gives
	| you a variety of powerful log handlers / formatters to utilize.
	|
	| Available Settings: "single", "daily", "syslog", "errorlog"
	|
	*/
	'log' => env('APP_LOG', 'single'),

	'log_level' => env('APP_LOG_LEVEL', 'debug'),

];
