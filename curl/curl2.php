<?php
// Initialize CURL
$ch = curl_init('https://www.google.com');

// Set the URL to request
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com');
// Set the return type to be a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);


// Close CURL
curl_close($ch);

?>