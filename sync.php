<?php
//The connection string for DahuaDVr
// http://user:pass@DVRIP/cgi-bin/configManager.cgi?action=getConfig&name=Locales
/*
This script is designed to sync the timezone of a dvr/camera to whatever you specify
*/
include('config.php');

$CurlGet = curl_init();
$options = array(
    CURLOPT_URL            => $geturl,
    CURLOPT_RETURNTRANSFER => true,   // return web page
    CURLOPT_HEADER         => false,  // don't return headers
    CURLOPT_FOLLOWLOCATION => true,   // follow redirects
    CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
    CURLOPT_ENCODING       => "",     // handle compressed
    CURLOPT_USERAGENT      => "test", // name of client
    CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
    CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
    CURLOPT_TIMEOUT        => 120,    // time-out on response
    CURLOPT_VERBOSE        => 0,
    CURLOPT_USERPWD        => $user . ":" . $pass,
    CURLOPT_HTTPAUTH       => CURLAUTH_ANY,    
); 

curl_setopt_array($CurlGet, $options);
$result = curl_exec($CurlGet);

curl_close($CurlGet);

if (strpos($result,$timeZone) == FALSE){
    $options[CURLOPT_URL] = $seturl;  
    $ch2 = curl_init();
    curl_setopt_array($ch2, $options);
    $result = curl_exec($ch2);
    $datetime = new DateTime();
    $filename = $datetime ->format  ('Y-m-dHis').".txt";
    $myfile = fopen("$filename","w") or die("Unable to open file!");
    file_put_contents($filename,"Time Zone Changed at ".$datetime ->format ('Y-m-d H:i:s'));
}
?>