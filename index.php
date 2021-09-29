<?php

require_once 'Curl.php';

$title = 'Havvo';
$description = 'Ming dardga davo';

$text = "<b>$title</b>" . PHP_EOL . $description . PHP_EOL . "<a href='http://havvo.uz'>Havvo</a>";

$data = [
    'chat_id' => 42229990,
    'text' => $text
];

$request = new Curl();
$response = $request->send($data, 'sendmessage');

echo "<pre>";
print_r($response);
die;



