<?php
include('parse.php');
$curl = curl_init('https://home.hamilton.k12.wi.us');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_COOKIE, "noodle=$noodle;");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
        echo 'Scraper error: ' . curl_error($curl);
        exit;
}

curl_close($curl);

$regex = '/\$(\d+\.\d{2})/';
if ( preg_match($regex, $page, $match) )
{
        $bal=$match[0];
        echo $bal;
        
} else {
print "Error";
}
?>

