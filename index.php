
<?php
echo ' 
<!DOCTYPE html>
<html>
<head></head>
<body>
<img src="images/lab.png" height="400" align="right">
<body background="images/red.jpg">
<font color="white">
<h1>
RED Test Site<br/> 
..................................<br/>
<h1/>
</font>
</body>
</html>
';

echo '<p style="color: white"/p>';
//echo '<p style="font-size: 20px"/p>';
//echo getenv('ENV_VAR');

echo "Today Date is " . date("M,d,Y") . "<br>";
echo "The Time is " . date("h:i:s") .  "<br>";

echo "<br>";



echo "<br>";

echo "<br>";


echo "<br>";

     // create a new cURL resource
      $ch = curl_init ();

      // set URL and other appropriate options
      curl_setopt ($ch, CURLOPT_URL, 'http://ipecho.net/plain');
      curl_setopt ($ch, CURLOPT_HEADER, 0);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

      // grab URL and pass it to the browser

      $ip = curl_exec ($ch);
      echo "Public IP is: $ip<br />";
      // close cURL resource, and free up system resources
      curl_close ($ch);

echo "<br>";

//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo "Client IP is $ip_address<br />";

$SPORT = $_SERVER['REMOTE_PORT'];
echo  "Client Source Port is $SPORT<br>";

$rURI = $_SERVER['REQUEST_URI'];
echo "Requested URI is $rURI<br>";

echo "<br>";

//echo file_get_contents("/tmp/host-hostname");

$ServerName = file_get_contents("/tmp/host-hostname");
echo "Server Name is $ServerName<br />"; 

echo "<br>";

$hostname = gethostname();
echo "Server Container ID is $hostname<br />";

$SIP = $_SERVER['SERVER_ADDR'];
//$SIP = $_SERVER['SERVER_ADDR'];
echo "Server Container IP is $SIP<br />";

$SPORT = $_SERVER['SERVER_PORT'];
echo "Server Container Port is $SPORT<br />";



echo "<br>";
$BROWSER = $_SERVER['HTTP_USER_AGENT'];
echo "User Browser is $BROWSER<br/>";
echo "<br>";


?>
