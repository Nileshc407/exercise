<?php
require_once 'vendor/autoload.php'; // Include the autoloader

use Google\Auth\Credentials\ServiceAccountCredentials;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

function getAccessToken($projectId, $privateKeyPath)
{
    // Load the private key file
    $credentials = new ServiceAccountCredentials(
        ['https://www.googleapis.com/auth/firebase.messaging'],
        $privateKeyPath
    );

    // Set the project ID
    $credentials->projectId = $projectId;

    // Create the HTTP client
    $httpClient = new Client();

    try {
        // Get the access token
        $accessToken = $credentials->fetchAuthToken($httpClient);
        return $accessToken['access_token'];
    } catch (RequestException $e) {
        // Handle any errors that occurred during the token retrieval
        echo 'Error getting access token: ' . $e->getMessage();
    }
}

// Usage
$projectId = 'your-project-id';
$privateKeyPath = 'path/to/your/private-key.json';

$accessToken = getAccessToken($projectId, $privateKeyPath);
echo 'Access Token: ' . $accessToken;
?>