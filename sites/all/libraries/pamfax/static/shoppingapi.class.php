<?php
/**
* Functionality for buying and payment
* 
* The Shopping API has some functions to handle shop items, links, sessions etc
*/
class ShoppingApi extends ApiClient
{
	/**
	* Returns a list of available items from the shop.
	* 
	* When a user is logged in, it will also contain the items only available to validated customers.
	*/
	public static function ListAvailableItems()
	{
		return self::StaticApi('Shopping/ListAvailableItems',array(),false);
	}

	/**
	* Returns an invoice pdf file for a payment (see UserInfo/ListOrders).
	* 
	* Returns binary data so call with API_FORMAT_PASSTHRU.
	*/
	public static function GetInvoice($payment_uuid)
	{
		return self::StaticApi('Shopping/GetInvoice',array('payment_uuid' => $payment_uuid),false);
	}

	/**
	* Returns different shop links.
	* 
	* Use these links to open a browser window with the shop in a specific state.
	* @param <string> $type Type of link to return. Available: '', credit_packs, basic_plan, pro_plan, checkout
	* @param <string> $product Product to add. Available: '',BasicPlan12,ProPlan12,OnDemand,Pack10,Pack30,Pack50,Pack100,Pack250,Pack500,Pack1000
	* @param <string> $pay (DEPRECATED) direct leads to checkout page
	*/
	public static function GetShopLink($type = false, $product = false, $pay = false)
	{
		return self::StaticApi('Shopping/GetShopLink',array('type' => $type, 'product' => $product, 'pay' => $pay),false);
	}

	/**
	* Retruns a list of countries where new fax-in numbers are currently available
	*/
	public static function ListFaxInCountries()
	{
		return self::StaticApi('Shopping/ListFaxInCountries',array(),true);
	}

	/**
	* Returns available fax-in area codes in a given country+state. See Shopping::ListFaxInCountries for country- and state-codes. If require_pi is 1, it means that user can only get fax-in number with this area code if he sends a verification document (see www.pamfax.biz/KB85)
	* @param string $country_code Countrycode of country to list (ISO 3166 Alpha 2 country codes. I.e. US, DE, ...)
	* @param string $state Otional state code (currently USA only)
	*/
	public static function ListFaxInAreacodes($country_code, $state = false)
	{
		return self::StaticApi('Shopping/ListFaxInAreacodes',array('country_code' => $country_code, 'state' => $state),true);
	}

	/**
	* Adds some credit in user's currency to the currently logged in user.
	* 
	* NOTES:
	* This method is for testing purposes only, so it is not available in the LIVE system. Use it to create
	* some 'virtual' credits for your users.
	* @param string $amount The amount of credit you want to add to the current user's pamfax credit. Currency is the user's currency. You can also pass a negative value to remove credit from user for testing.
	* @param string $reason Optionally add some reason why you added this credit
	*/
	public static function AddCreditToSandboxUser($amount, $reason = '')
	{
		return self::StaticApi('Shopping/AddCreditToSandboxUser',array('amount' => $amount, 'reason' => $reason),false);
	}

	/**
	* Redeem a credit voucher.
	* 
	* These are different then the shop vouchers to be used in the online shop!
	* You can use "PCPC0815" to test this function in the Sandbox API
	* @param string $vouchercode vouchercode The voucher code. Format is ignored.
	*/
	public static function RedeemCreditVoucher($vouchercode)
	{
		return self::StaticApi('Shopping/RedeemCreditVoucher',array('vouchercode' => $vouchercode),false);
	}

	/**
	* Get the nearest available fax-in area code for the given IP-Address.
	* 
	* Used to show "You can get a fax-in number in <areacode>..." to the user to offer PamFax plans to him
	* @param string $ip_address IP-Address to find nearest number for
	*/
	public static function GetNearestFaxInNumber($ip_address)
	{
		return self::StaticApi('Shopping/GetNearestFaxInNumber',array('ip_address' => $ip_address),true);
	}
}
?>
