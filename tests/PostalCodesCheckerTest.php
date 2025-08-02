<?php

namespace Kbarut\PostalCode\Tests;

use Kbarut\PostalCode\PostalCodeChecker;

it('empty input', function () {
	
    $postalCodeChecker = Mockery::mock(PostalCodeChecker::class);
	
    $res = $postalCodeChecker->validate('');
	
    expect($res)->toBeFalse();
    
});

it('wrong characters count', function () {
	
    $postalCodeChecker = Mockery::mock(PostalCodeChecker::class);
	
    $res = $postalCodeChecker->validate('0194512345');
	            	
    expect($res)->toBeFalse();
 
});

it('wrong characters types', function () {

    $postalCodeChecker = Mockery::mock(PostalCodeChecker::class);
	
    $res = $postalCodeChecker->validate('A1945');
	
    expect($res)->toBeFalse();

});

it('existing german postal code', function () {

    $postalCodeChecker = Mockery::mock(PostalCodeChecker::class);
	
    $res = $postalCodeChecker->validate('01945');
	
    expect($res)->toBeTrue();
});
