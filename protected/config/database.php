<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host='.getEnvVariable('DB_HOST').';dbname='.getEnvVariable('DB_NAME'),
	'emulatePrepare' => true,
	'username' => getEnvVariable('DB_USER'),
	'password' => getEnvVariable('DB_PASSWORD'),
	'charset' => 'utf8',
	
);