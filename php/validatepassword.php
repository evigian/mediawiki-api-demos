<?php

/*
    validatepassword.php

    MediaWiki Action API Code Samples
    Demo of `validate password` module: Validate a password against the wiki's password policies.
    MIT license
"""
*/

# Validate a password for a current user.

<?php

$endPoint = "https://en.wikipedia.org/w/api.php"

$validate_password = validatePassword();

function validatePassword() {
	global $endPoint;
	
	$params = [
		"action" => "validatepassword",
		"password" => "my_password",
		"format" => "json"
	]
		
	$ch = curl_init();

	curl_setopt( $ch, CURLOPT_URL, $endPoint );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params ) );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_COOKIEJAR, "cookie.txt" );
	curl_setopt( $ch, CURLOPT_COOKIEFILE, "cookie.txt" );

	$output = curl_exec( $ch );
	curl_close( $ch );
}

# Validate a password for creating a new user.

<?php

$endPoint = "https://en.wikipedia.org/w/api.php"

$validate_password = validatePassword();

function validatePassword() {
	global $endPoint;
	
	$params1 = [
		"action" => "validatepassword",
		"password" => "my_password",
        "user" => "new_user",
		"format" => "json"
	]
		
	$ch = curl_init();

	curl_setopt( $ch, CURLOPT_URL, $endPoint );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params1 ) );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_COOKIEJAR, "cookie.txt" );
	curl_setopt( $ch, CURLOPT_COOKIEFILE, "cookie.txt" );

	$output = curl_exec( $ch );
	curl_close( $ch );
}
