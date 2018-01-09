<?php
// les drivers de db
// - mysql
// - sqlite
// - redis ?
// - lowdb

// le tableau avec la liste des connexions
// le versionnement de la base par git (gestion par fichier dans le dossier database)
return [
	/*
    | Database driver
    */
	'driver' => 'mysql',

	/*
	| Driver parameters
	*/
	'host' => env('DB_HOST', '127.0.0.1'),

	'port' => env('DB_PORT', '3306'),

	'database' => env('DB_DATABASE', 'forge'),

	'username' => env('DB_USERNAME', 'forge'),

	'password' => env('DB_PASSWORD', ''),

	'unix_socket' => env('DB_SOCKET', ''),

	'charset' => 'utf8mb4',

	'collation' => 'utf8mb4_unicode_ci',

	'prefix' => '',

	'strict' => true,

	'engine' => 'InnoBD',

	/*
    | Versioning
    */

];

/* Exemple de connection

	'driver' => 'sqlite',
	'database' => env('DB_DATABASE', database_path('database.sqlite')),
	'prefix' => '',


	'driver' => 'mysql',
	'host' => env('DB_HOST', '127.0.0.1'),
	'port' => env('DB_PORT', '3306'),
	'database' => env('DB_DATABASE', 'forge'),
	'username' => env('DB_USERNAME', 'forge'),
	'password' => env('DB_PASSWORD', ''),
	'unix_socket' => env('DB_SOCKET', ''),
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_unicode_ci',
	'prefix' => '',
	'strict' => true,
	'engine' => null,


	'driver' => 'pgsql',
	'host' => env('DB_HOST', '127.0.0.1'),
	'port' => env('DB_PORT', '5432'),
	'database' => env('DB_DATABASE', 'forge'),
	'username' => env('DB_USERNAME', 'forge'),
	'password' => env('DB_PASSWORD', ''),
	'charset' => 'utf8',
	'prefix' => '',
	'schema' => 'public',
	'sslmode' => 'prefer',


	'driver' => 'lowdb',
	'database' => env('DB_DATABASE', database_path('database.sqlite')),
	'prefix' => '',


*/
