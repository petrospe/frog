<?php

// Custom mode for Yii to get .env variables
// Check if the script is running on Heroku (checks for the DYNO environment variable)
if (!getenv('DYNO')) {
    // Running locally, load from .env file
    $envFilePath = dirname( __FILE__ ) . '/.env';

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

// List of allowed IP addresses
$allowedIPs = explode(',',getEnvVariable('DB_ALLOWED_IPS'));
array_push($allowedIPs, '127.0.0.1');

// Get the client's IP address
$clientIP = isset($_SERVER['HTTP_CLIENT_IP']) 
    ? $_SERVER['HTTP_CLIENT_IP'] 
    : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
      ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
      : $_SERVER['REMOTE_ADDR']);

// Check if the client's IP is in the list of allowed IPs
if (in_array($clientIP, $allowedIPs) || $clientIP === '::1') {
    // Access is allowed
} else {
    // Access is forbidden
    die("403 Forbidden - Access Denied");
}

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();