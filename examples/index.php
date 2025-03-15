<?php

require __DIR__ . '/../vendor/autoload.php';

use Kbarut\PostalCodes\PostalCodesChecker;

$postalCodesChecker = new PostalCodesChecker();

var_dump($postalCodesChecker->validate('01945')); // bool(true)
