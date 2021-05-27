<? php

	require_once 'google/vendor/autoload.php';

	// Get $id_token via HTTPS POST.
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
