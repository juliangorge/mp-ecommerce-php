<?php
$input = @file_get_contents("php://input");

file_put_contents(
	'notifications.json', 
	$input . PHP_EOL, 
	FILE_APPEND
);

http_response_code(200);