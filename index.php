<?php
require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', "controllers\Demo@index");
Macaw::get('/page', "controllers\Demo@page");
Macaw::get('/test', "controllers\Test@index");



Macaw::dispatch();