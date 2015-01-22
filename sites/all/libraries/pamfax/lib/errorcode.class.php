<?php

class ErrorCode
{
	const UNSPECIFIED					= -1;
	const OK							= 0;

	const HTML_403						= 403;
	const HTML_404						= 404;
	const HTML_500						= 500;

	const INVALID_USER					= 1001;
	const MESSAGE_SEND_FAILED			= 1002;
	const BAD_IDENTIFIER_TYPE			= 1003;		// used in login
	const USER_BLACKLISTED				= 1004;		// used in login
	const BAD_PASSWORD					= 1005;		// invalid new password
	const NO_USER_LOGGED_IN				= 1006;
	const BAD_CURRENCY					= 1007;
	const SHOP_USER_NOT_FOUND			= 1008;
	const VOUCHER_INVALID				= 1010;
	const VOUCHER_EXPIRED				= 1011;
	const USER_NOT_FOUND				= 1012;
	const IDENTIFIER_ALREADY_USED		= 1013;		// trying to add an identifier that is already in use by other user
	const IDENTIFIER_NOT_FOUND			= 1014;
	const INVALID_IP					= 1015;
    const PROFILE_TYPE_DEPRECATED       = 1016;
    const INVALID_NAME_CHARS            = 1017;
	const INVALID_DATETIME				= 1018;
	const CURRENT_PASSWORD_WRONG		= 1019;		// Wrong current password provided during password change
	const DEPRECATED					= 1020;		// function/parameters deprecated
	const COMING_SOON					= 1021;
	const SESSION_NOT_FOUND				= 1022;
	const SESSION_NOT_EXTENDED			= 1023;
	const USERNAME_NOT_FOUND			= 1024;
	const USERNAME_ALREADY_CONFIRMED	= 1025;
	const USERNAME_NOT_CONFIRMED		= 1026;

	const USER_EXISTS					= 2001;
	const FAX_EXISTS					= 2002;
	const INVALID_FAX_IN				= 2003;
	const INVALID_FAX_NUMBER			= 2004;
	const USER_EMAIL_ALREADY_EXIST		= 2005;
	const UNSUPPORTED_FAX_NUMBER		= 2006;

	const BAD_PROPERTY					= 3001;
	const BAD_EMAIL						= 3002;
	const BAD_USERNAME					= 3003;
	const USER_IS_POST_PAY				= 3004;
	const USERNAME_ALREADY_USED			= 3005;
	const TOO_MANY_COVERS				= 3006;
	const BAD_COVER_FILE				= 3007;

	const FILE_NOT_FOUND				= 4001;
	const NO_FAX						= 4002;		// Create() not yet called on FaxJob
	const NO_FILES_IN_FAX				= 4003;
	const BAD_FILE						= 4004;
	const INVALID_COVER					= 4005;
	const NO_ESKER_FAX					= 4006;
	const NO_RECIPIENTS_IN_FAX			= 4007;
	const NOT_ENOUGH_CREDIT				= 4008;
	const ENOUGH_CREDIT					= 4009;
	const FAX_NOT_FOUND					= 4010;
	const PAYMENT_NOT_FOUND				= 4011;
	const INVALID_RECIPIENT				= 4012;
	const FAX_REMOVED					= 4013;
	const INVOICE_NOT_FOUND				= 4014;
	const GENERATION_FAILED				= 4015;
	const DUPLICATE_RECIPIENT			= 4016;
	const RESELLER_LOCKED				= 4017;
	const TOO_MANY_NUMBERS				= 4018;
	const TOO_MANY_FILES				= 4019;
	const FILENAME_TOO_LONG				= 4020;
	const FILE_TOO_LARGE				= 4021;
	const LNK_FILE						= 4022;
	const CONVERSION_COMPILEFAX			= 4023;
	
	const FAX_NOT_READY					= 5001;
	const CREATING_PREVIEW				= 5002;

	// Codes for CompanyInfo API
	const ACCEPT_MEMBERSHIP				= 6001;
//	const DELETE_COMPANY				= 6002;		
	const COMPANY_NOT_SAVED				= 6003;
//	const COMPANY_NOT_CREATED			= 6004;
	const NO_COMPANY					= 6005;
//	const MEMBER_NOT_FOUND				= 6007;
	const MEMBER_NOT_SAVED				= 6008;
	const MEMBER_NOT_DELETED			= 6009;
	const INVITING_USER_NOTFOUND		= 6012;
	const DELETE_MEMBERSHIP				= 6013;
//	const MEMBERSHIP_NOT_FOUND			= 6014;
//	const ACCEPT_NO_MEMBERSHIP_FOUND	= 6015;
//	const COMPANY_NOT_FOUND				= 6016;
	const VALUE_MUST_BE_LARGER_ZERO		= 6017;
	const NO_MEMBERSHIP					= 6018;
	const NO_COMPANYOWNER				= 6019;
	const LESS_THAN_ALLOWED_MINIMUM		= 6020;
	const COMPANY_DATA_INCOMPLETE		= 6021;

	// fax-in purchase process:
	const INVALID_COUNTRY_CODE			= 7001;
	const COUNTRY_HAS_NO_STATES			= 7002;
	const INVALID_COUNTRY_STATE			= 7003;
	const ADDRESS_FIELD_MISSING			= 7004;
	const ADDRESS_VALIDATION_ERROR		= 7005;
	const ADDRESS_INVALID				= 7006;
    const TESTNUMBER_LIMIT				= 7007;
    const NO_FAXIN_AVAILABLE			= 7008;	
    const DID_GROUP_MISSING 			= 7009;
	const AREA_CODE_EMPTY				= 7010;
	const ADDRESS_FIELD_TOO_BIG			= 7011;

	// Codes for Common-API
	const INVALID_ZONE					= 8001;
	const INVALID_PERCENT_VALUE			= 8002;

	// UserInfo-API
	const IMPORTING_CONTACTS_FAILED		= 9001;
	const INVALID_PROVIDER				= 9002;
	const RECOMMENDING_FAILED			= 9003;
	const FACEBOOK_TOKEN				= 9004;
	const PAYOUT_FAILED					= 9005;
	const REACTIVATION_FAILED			= 9006;
	const NO_AVATAR						= 9007;
	const INVALID_CULTURE				= 9008;
	
	// fax history api
	const ACCESS_DENIED					= 10001;
	const INVALID_SPAMSCORE				= 10002;
	const EMPTY_SENDER					= 10003;
	// onlinestorage api
	const UNKNOWN_PROVIDER				= 11001;
	const ALREADY_AUTHENTICATED			= 11002;
	const NOT_AUTHENTICATED				= 11003;
	const AUTHENTICATION_EXPIRED		= 11004;
	const DOWNLOAD_FAILED				= 11005;
	const UNABLE_TO_CREATE_PATH			= 11006;
	const NO_FILE_UPLOADED				= 11007;
	const UNABLE_TO_UPLOAD_FILE			= 11008;
	const MISSING_ARGUMENT				= 11009; // missing settings argument
	const MISSING_SETTINGS				= 11010; // missing osp settings
	const GOOGLE_2STEP_ERROR			= 11020;

	// account api
	const REGISTRATION_FAILED			= 12001;
	const REGISTRATION_MISSING_DATA		= 12002;
	const REGISTRATION_INVALID_EMAIL	= 12003;
	const REGISTRATION_EMAIL_IN_USE     = 12004;
	const BAD_DATE_VALUE				= 12005;
	const BAD_TIME_VALUE				= 12006;
	const BAD_DATETIME_VALUE			= 12007;
	const NO_RESELLER_ID				= 12008;
	const INVALID_TIMEZONE				= 12009;

	// urlshortener api
	const SHORTENING_FAILED				= 13001;
	const INVALID_SHORTURL				= 13002;

	// missing user-rights
	const MISSING_RIGHT					= 14000;
	const MISSING_RIGHT_MESSAGING		= 14001;

	// fax number provider related
	const INVALID_NUMBER_PROVIDER		= 15000;
	const PROVIDER_NOT_ASSIGNABLE		= 15001;
	const NUMBER_ALREADY_ASSIGNED		= 15002;
	const NUMBER_NOT_ASSIGNED			= 15003;
	const NUMBER_NOT_ASSIGNED_TO_USER	= 15004;
	const PROVIDER_NOT_CANCELABLE		= 15005;
	const UNABLE_TO_CANCEL				= 15006;
	const ALIAS_NOT_FOUND				= 15007;
	const INVALID_ALIAS_NUMBER			= 15008;
	const ALIAS_ALREADY_ASSIGNED		= 15009;
	
	// Contacts API
	const GROUP_NOT_FOUND               = 16000;
	const CONTACT_NOT_FOUND             = 16001;
	const GROUP_ALREADY_EXISTS          = 16002;
	const NOTHING_TO_DO					= 16003;
	
	//checksum, md5 and other file system error codes
	const FILE_WRONG_CHECKSUM           = 17000;	// file have wrong md5 content checksum
	const FILE_WRONG_SIZE           	= 17001;	// file size didnt' match with filesize received by query
	
	// API flood protection
	const TOO_MANY_REQUESTS				= 20000;
	
	const VOXBONE_FAILURE_SOAP_PIVALID	= 21000;
	const VOXBONE_VERIFY_DOC_MISSING	= 21001;
	
	//Processing
	const PROC_TASK_NOT_FOUND			= 22000;
	const PROC_JOB_NOT_FOUND			= 22001;
	const PROC_TASK_CANCELLED			= 22002;
	
	//OnlineStorage
	const OSP_PROVIDER_NOT_FOUND		= 23000;
	const OSP_CHECKSTATE_NOT_SUPPORTED	= 23001;
	const OSP_OVERLOAD					= 23002;
	const OSP_NISSED_AUTORIZATION		= 23003;
	const OSP_BAD_RESPONSE				= 23004;
	const OSP_ERROR_NONE				= 23999;
	
	const SP_ACTION_NOT_FOUND			= 24000;
	const SP_SCORES_NOT_CREATED			= 24001;

	/**
	 * Returns text message for given code. Messages stored in trasnlations. Use ERR_ preffix to create new error text for constants in lang-editor.
	 * @param unknown_type $code
	 * @return string
	 */
	public static function ToText($code)
	{
		
		$ref = System_Reflector::GetInstance('ErrorCode');
		
		foreach( $ref->getConstants() as $name=>$value )
			if( $value == $code )
				return "ERR_".$name;
		
		return "ERR_UNKNOWN";
	}
}
