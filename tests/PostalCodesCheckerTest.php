<?php

namespace Kbarut\PostalCodes\Tests;

use Kbarut\PostalCodes\PostalCodesChecker;

it('empty input', function () {
	
    $postalCodesChecker = Mockery::mock(PostalCodesChecker::class);
	
	$res = $postalCodesChecker->validate('');
	
	expect($res)->toBeFalse();
    
});

it('wrong characters count', function () {
	
    $postalCodesChecker = Mockery::mock(PostalCodesChecker::class);
	
	$res = $postalCodesChecker->validate('0194512345');
	            	
	expect($res)->toBeFalse();
 
});

it('wrong characters types', function () {

    $postalCodesChecker = Mockery::mock(PostalCodesChecker::class);
	
	$res = $postalCodesChecker->validate('A1945');
	
	expect($res)->toBeFalse();

});

it('existing german postal code', function () {

    $postalCodesChecker = Mockery::mock(PostalCodesChecker::class);
	
	$res = $postalCodesChecker->validate('01945');
	
	expect($res)->toBeTrue();
});
