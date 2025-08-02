<?php

require __DIR__ . '/../vendor/autoload.php';

use Kbarut\PostalCode\PostalCodeChecker;

$postalCodeChecker = new PostalCodeChecker();

var_dump($postalCodeChecker->validate('01945')); // bool(true)
