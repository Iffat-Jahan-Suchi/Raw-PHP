<?php
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';
use Twilio\Rest\Client;

$sid    = "ACcb8128551e06c67db46cf1436a43a57e";
$token  = "5ca75c50efe0eac93b78edbd728dac49";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+8801753694493", // to
        array(
            "from" => "+18146463230",
            "body" => Your new notification
        )
      );

print($message->sid);
