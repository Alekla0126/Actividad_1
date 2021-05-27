<?php

	require_once 'vendor/autoload.php';

	// Get $id_token via HTTPS POST.
	$id_token= $_POST['id_token'];
	$CLIENT_ID = "559809341234-elmqbps1vrlkuirmv2muvcsl51vigvf4.apps.googleusercontent.com";
	// Specify the CLIENT_ID of the app that accesses the backend
	$client = new Google_Client(['client_id' => $CLIENT_ID]);
	$payload = $client->verifyIdToken($id_token);
	if ($payload)
	{
		$userid = $payload['sub'];
		// If request specified a G Suite domain:
		//$domain = $payload['hd'];
	}
	else
	{
		// Invalid ID token
	}
