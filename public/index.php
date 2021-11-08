<?php

require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

$hello = new App\Wcs\Hello();
echo $hello->talk();
