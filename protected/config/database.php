<?php
// Custom mode for Yii to get .env variables
// Check if the script is running on Heroku (checks for the DYNO environment variable)
if (!getenv('DYNO')) {
    // Running locally, load from .env file
    $envFilePath = dirname(dirname(dirname( __FILE__ ))) . '/.env';

    // Check if the .env file exists
    if (file_exists($envFilePath)) {
        // Read the .env file and parse its contents
        $envContents = file_get_contents($envFilePath);
        $envVariables = preg_split('/\r\n|\r|\n/', $envContents);

        foreach ($envVariables as $envVariable) {
            // Split the line into key and value
            list($key, $value) = explode('=', $envVariable, 2);

            // Set the environment variable
            if ($key && $value) {
                $_ENV[$key] = $value;
                putenv("$key=$value");
            }
        }
    } else {
        die('.env file not found.');
    }
}

function getEnvVariable($envvariable){
    $value = null;
    if(!empty($envvariable)){
        $value =  (!empty(getenv($envvariable))?getenv($envvariable):(!empty($_ENV[$envvariable])?$_ENV[$envvariable]:null));
    }
    return $value;
}

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'class'=>'CDbConnection',
	'connectionString' => getEnvVariable('DATABASE_URL'),
	'emulatePrepare' => true,
	'username' => getEnvVariable('DB_USER'),
	'password' => getEnvVariable('DB_PASSWORD'),
	'charset' => 'utf8',
	
);