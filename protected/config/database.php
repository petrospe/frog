<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=nbalma_gr_nbalmav2',
	'emulatePrepare' => true,
	'username' => 'nbalma',
	'password' => 'nbalma1!',
	'charset' => 'utf8',
	
);