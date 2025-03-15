<?php

namespace Kbarut\PostalCodes;

class PostalCodesChecker
{
	/**
	* validates or invalidates $input against the german zip codes listed in the 'src/zipcodes-de.json' file,
	*
	* @param string $input 
	* @return bool
	*/	
	public function validate(string $input): bool
    {		
		$cleaned_input = preg_replace('/\s+/','',$input);
		
		if ( (ctype_digit($cleaned_input) === false) or (strlen($cleaned_input) != 5)  ) 
			return false;
						
		$res = $this->checkPostalCode($cleaned_input);
			
		return $res;
	}
	

	/**
	* Returns true if $cleaned_input matches any of the german zip codes listed in the 'src/zipcodes-de.json' file
	* returns false otherwise.
	*
	* @param string $cleaned_input
	* @return bool 
	*/
	public function checkPostalCode(string $cleaned_input): bool
    {
		$res = false;
		
		$data = [];
		
		$arr = [];
				
		$jsonData = file_get_contents('zipcodes-de.json');
		
		$data = json_decode($jsonData,true);
								
		foreach( $data as $arr) {
			
			foreach( $arr as $key => $value) {
	
				if  ( ($key === 'zipcode') && ($value === $cleaned_input) ) {
					
					$res = true;
				
					break;
				
				}	
			}
			
			if ($res === true)
				return $res;
					
		}
		
		return $res;
	}
    		
}
