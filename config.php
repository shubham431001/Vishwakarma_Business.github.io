<?php

// Google API configuration
define('GOOGLE_CLIENT_ID', '408755358279-u2q46jamnfd5600tl7mggttbfbdosb5e.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'http://localhost/Vishwakarma_Business/index2.php');

//Include Google Client Library for PHP autoload file
require_once 'libraries/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId(GOOGLE_CLIENT_ID);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_client->addScope('email');
$google_client->addScope('profile');

//start session on web page

?>