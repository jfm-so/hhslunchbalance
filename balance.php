<?php
include('parse.php');
$params = array('http' => array(
    'method' => 'GET',
    'header'=>"Accept-language: en\r\n" .
              "Cookie: noodle=$noodle\r\n"
));
$sUrl = "https://home.hamilton.k12.wi.us";
$ctx = stream_context_create($params);
$fp = @fopen($sUrl, 'rb', false, $ctx);
if (!$fp)
{
    throw new Exception("Problem with $sUrl, $php_errormsg");
}

$response = @stream_get_contents($fp);
if ($response === false) 
{
    throw new Exception("Problem reading data from $sUrl, $php_errormsg");
}
$regex = '/\$(\d+\.\d{2})/';
preg_match($regex,$response,$match);
$bal=$match[0];
echo "Bal: $bal\n";
?>
