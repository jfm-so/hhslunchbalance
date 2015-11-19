<?php
include('balance.php');
include('config.php');
include('gencookie.php');
if ($dbactive == "true") {
echo "\nDB enabled\n";

include('db.php');
}
if ($sgactive == "true") {
echo "\nSendgrid Active\n";
 
include('email.php');
}

if ($twilioactive == "true") {
echo "\nTwilio Active\n";

include('twilio.php');
}
