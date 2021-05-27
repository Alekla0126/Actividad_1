<?php

	require_once 'vendor/autoload.php';

	// Get $id_token via HTTPS POST.
	$id_token = $_POST['id_token'];
	$CLIENT_ID = '559809341234-elmqbps1vrlkuirmv2muvcsl51vigvf4.apps.googleusercontent.com';
	// Specify the CLIENT_ID of the app that accesses the backend
	$client = new Google_Client(['client_id' => $CLIENT_ID]);
	$payload = 'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token='.$id_token;
	$json = file_get_contents($payload);
	$userInfoArray = json_decode($json, TRUE);
	$googleEmail = $userInfoArray['email'];
	$google_id = $userInfoArray['sub'];

	if ($googleEmail)
	{
		echo "validated".$googleEmail;
	}
	else
	{
		echo "inValidate";
	}

