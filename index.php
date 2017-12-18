<?php

require __DIR__.'/vendor/autoload.php';

use Chaoyenpo\ResponseClass\JsonResponse;

$person = array(
	'name' => 'Alice',
	'age' => 17
);

new JsonResponse('unauthorized', '123', $person);