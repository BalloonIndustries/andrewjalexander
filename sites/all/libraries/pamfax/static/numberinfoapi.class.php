<?php
/**
* Information about fax-numbers.
* 
* The NumberInfo API contains some functions about fax numbers like pricing, zone information, etc
*/
class NumberInfoApi extends ApiClient
{
	/**
	* Get some information about a fax number.
	* 
	* Result contains zone, type, city, ...
	* Validates and corrects the number too.
	* @param string $faxnumber The faxnumber to query (incl countrycode: +12139851886, min length: 8)
	*/
	public static function GetNumberInfo($faxnumber)
	{
		return self::StaticApi('NumberInfo/GetNumberInfo',array('faxnumber' => $faxnumber),true);
	}

	/**
	* Calculate the expected price per page to a given fax number.
	* 
	* Use GetNumberInfo when you do not need pricing information, as calculating expected price takes longer then just looking up the info for a number.
	* @param string $faxnumber The faxnumber to query (incl countrycode: +12139851886, min length: 8). Login user first to get personalized prices.
	*/
	public static function GetPagePrice($faxnumber)
	{
		return self::StaticApi('NumberInfo/GetPagePrice',array('faxnumber' => $faxnumber),true);
	}
}
?>
