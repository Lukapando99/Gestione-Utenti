<?php 
	require_once("FoursquareApi.class.php");
	
	// This file is intended to be used as your redirect_uri for the client on Foursquare
	
	// Set your client key and secret
	$client_key = "3AGUTWIPEQWCBRFCAHIN104WCY0IAPETGLTQIJUDP0JMIC5W";
	$client_secret = "NH1JI30DQ4YSF5PBSWMCTGPWLHBR1Z11VHYI5ELMV2MNAXNV";
	$redirect_uri = "20170101";
	
	// Load the Foursquare API library
	$foursquare = new FoursquareApi($client_key,$client_secret);
	
	// If the link has been clicked, and we have a supplied code, use it to request a token
	if(array_key_exists("code",$_GET)){
		$token = $foursquare->GetToken($_GET['code'],$redirect_uri);
	}
	
?>
<!doctype html>
<html>
<head>
	<title>PHP-Foursquare :: Token Request Example</title>
</head>
<body>
<h1>Token Request Example</h1>
<p>
	<?php 
	// If we have not received a token, display the link for Foursquare webauth
	if(!isset($token)){ 
		echo "<a href='".$foursquare->AuthenticationLink($redirect_uri)."'>Connect to this app via Foursquare</a>";
	// Otherwise display the token
	}else{
		echo "Your auth token: $token";
	}
	
	?>
	
</p>
<hr />
<?php 
	
?>
</body>
</html>
