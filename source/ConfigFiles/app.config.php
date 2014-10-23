<?php

class Settings
{
	const Timezone = 'America/Denver'; // To get a list of supported timezones see http://php.net/manual/en/timezones.php
	const MsgFormat = 'SOAP'; // 'SOAP', 'HTTP', 'JSON', 'XML' - Selects the message type SOAP, HTTP, REST_JSON, or REST_XML - REST_XML has not been implemented yet.
	/*
	 * Identity Token : Identity tokens are signed authentication tokens provided to merchants or other transaction originators to prevent the unauthorized use
	 * of an application. Identity tokens are set to expire after 3 years, and therefore will require renewal. Identity tokens should be managed and protected in a
	 * manner consistent with current key management best practices which may include access control, encryption, or use of specialized security devices. Identity
	 * token owners are responsible for establishing practices for managing sensitive data like any other secure credential or business certificate.
	 *
	 */
	const IdentityToken = 'PHNhbWw6QXNzZXJ0aW9uIE1ham9yVmVyc2lvbj0iMSIgTWlub3JWZXJzaW9uPSIxIiBBc3NlcnRpb25JRD0iXzhkNTZhNDkzLTEzZGYtNGE5Ny04NDlmLThmZGFlMzY2ZmZiOSIgSXNzdWVyPSJJcGNBdXRoZW50aWNhdGlvbiIgSXNzdWVJbnN0YW50PSIyMDE0LTAzLTIxVDE4OjEyOjQzLjgyNVoiIHhtbG5zOnNhbWw9InVybjpvYXNpczpuYW1lczp0YzpTQU1MOjEuMDphc3NlcnRpb24iPjxzYW1sOkNvbmRpdGlvbnMgTm90QmVmb3JlPSIyMDE0LTAzLTIxVDE4OjEyOjQzLjgyNVoiIE5vdE9uT3JBZnRlcj0iMjAxNy0wMy0yMVQxODoxMjo0My44MjVaIj48L3NhbWw6Q29uZGl0aW9ucz48c2FtbDpBZHZpY2U+PC9zYW1sOkFkdmljZT48c2FtbDpBdHRyaWJ1dGVTdGF0ZW1lbnQ+PHNhbWw6U3ViamVjdD48c2FtbDpOYW1lSWRlbnRpZmllcj5CREI4MTgxQUQ4QzAwMDAxPC9zYW1sOk5hbWVJZGVudGlmaWVyPjwvc2FtbDpTdWJqZWN0PjxzYW1sOkF0dHJpYnV0ZSBBdHRyaWJ1dGVOYW1lPSJTQUsiIEF0dHJpYnV0ZU5hbWVzcGFjZT0iaHR0cDovL3NjaGVtYXMuaXBjb21tZXJjZS5jb20vSWRlbnRpdHkiPjxzYW1sOkF0dHJpYnV0ZVZhbHVlPkJEQjgxODFBRDhDMDAwMDE8L3NhbWw6QXR0cmlidXRlVmFsdWU+PC9zYW1sOkF0dHJpYnV0ZT48c2FtbDpBdHRyaWJ1dGUgQXR0cmlidXRlTmFtZT0iU2VyaWFsIiBBdHRyaWJ1dGVOYW1lc3BhY2U9Imh0dHA6Ly9zY2hlbWFzLmlwY29tbWVyY2UuY29tL0lkZW50aXR5Ij48c2FtbDpBdHRyaWJ1dGVWYWx1ZT5iZTNkODQ1NC05ODlkLTQ2NjQtOGI4OC0yOTBkYmUwYjFmNjA8L3NhbWw6QXR0cmlidXRlVmFsdWU+PC9zYW1sOkF0dHJpYnV0ZT48c2FtbDpBdHRyaWJ1dGUgQXR0cmlidXRlTmFtZT0ibmFtZSIgQXR0cmlidXRlTmFtZXNwYWNlPSJodHRwOi8vc2NoZW1hcy54bWxzb2FwLm9yZy93cy8yMDA1LzA1L2lkZW50aXR5L2NsYWltcyI+PHNhbWw6QXR0cmlidXRlVmFsdWU+QkRCODE4MUFEOEMwMDAwMTwvc2FtbDpBdHRyaWJ1dGVWYWx1ZT48L3NhbWw6QXR0cmlidXRlPjwvc2FtbDpBdHRyaWJ1dGVTdGF0ZW1lbnQ+PFNpZ25hdHVyZSB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnIyI+PFNpZ25lZEluZm8+PENhbm9uaWNhbGl6YXRpb25NZXRob2QgQWxnb3JpdGhtPSJodHRwOi8vd3d3LnczLm9yZy8yMDAxLzEwL3htbC1leGMtYzE0biMiPjwvQ2Fub25pY2FsaXphdGlvbk1ldGhvZD48U2lnbmF0dXJlTWV0aG9kIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnI3JzYS1zaGExIj48L1NpZ25hdHVyZU1ldGhvZD48UmVmZXJlbmNlIFVSST0iI184ZDU2YTQ5My0xM2RmLTRhOTctODQ5Zi04ZmRhZTM2NmZmYjkiPjxUcmFuc2Zvcm1zPjxUcmFuc2Zvcm0gQWxnb3JpdGhtPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwLzA5L3htbGRzaWcjZW52ZWxvcGVkLXNpZ25hdHVyZSI+PC9UcmFuc2Zvcm0+PFRyYW5zZm9ybSBBbGdvcml0aG09Imh0dHA6Ly93d3cudzMub3JnLzIwMDEvMTAveG1sLWV4Yy1jMTRuIyI+PC9UcmFuc2Zvcm0+PC9UcmFuc2Zvcm1zPjxEaWdlc3RNZXRob2QgQWxnb3JpdGhtPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwLzA5L3htbGRzaWcjc2hhMSI+PC9EaWdlc3RNZXRob2Q+PERpZ2VzdFZhbHVlPkdsaFF3eURreWN3MHNKVzhhaWlLd3dQNGJYND08L0RpZ2VzdFZhbHVlPjwvUmVmZXJlbmNlPjwvU2lnbmVkSW5mbz48U2lnbmF0dXJlVmFsdWU+SVdMZjlod2g4WVl4Z29SMXN1ZWwvdUNELzZacFFxVE9oaW82SGpiR2l0WnFFd1FYN2xnZVFQS0hnazhjeWZRVWI1WWNKQi95a1Z5emZRNURXMDNyOFFGb0tiT3VzVEdFTHJEQS9FcWhZQXR6eTJvekxnRSs3dDFRbHJkb3hiazNnbDV5QXFKVzBsTVNOaTJ0dHQxOUNXWDdZdjVQUm5mcDRMck52SVZJQkx4UnNWZVdWdlhuMm91ZkFpWFNWUEtpaGtzTzd5elFRaDFNS1k5TzR0WUx2d1Z4dTMwTzF6cFpzK3NJS1VFRnArY1NBbkZOZXBVSEF4SU4zc1cvUE5OdWNDcFRMYUdwMnFGVkgwZGVSTXQwQWVLTHpVM0Rva0F0dHdUOS9iK1dZZERUcEJUZTMvV3pTVEpZdjN3N2xkWkdXWWh1L1hzdStlbGJ6V0g1eUo4clNRPT08L1NpZ25hdHVyZVZhbHVlPjxLZXlJbmZvPjxvOlNlY3VyaXR5VG9rZW5SZWZlcmVuY2UgeG1sbnM6bz0iaHR0cDovL2RvY3Mub2FzaXMtb3Blbi5vcmcvd3NzLzIwMDQvMDEvb2FzaXMtMjAwNDAxLXdzcy13c3NlY3VyaXR5LXNlY2V4dC0xLjAueHNkIj48bzpLZXlJZGVudGlmaWVyIFZhbHVlVHlwZT0iaHR0cDovL2RvY3Mub2FzaXMtb3Blbi5vcmcvd3NzL29hc2lzLXdzcy1zb2FwLW1lc3NhZ2Utc2VjdXJpdHktMS4xI1RodW1icHJpbnRTSEExIj5ZREJlRFNGM0Z4R2dmd3pSLzBwck11OTZoQ2M9PC9vOktleUlkZW50aWZpZXI+PC9vOlNlY3VyaXR5VG9rZW5SZWZlcmVuY2U+PC9LZXlJbmZvPjwvU2lnbmF0dXJlPjwvc2FtbDpBc3NlcnRpb24+';
	// encryption key value
	const key = '1234567890123456ABCDEFGHIJKLMNOP'; // Used for Salt for encryption and decryption
	// Application Data Values 
	const ApplicationName = 'My Test App';
	const SoftwareVersion = 'v1.0';
	const SoftwareVersionDate = '2012-07-24';
	const DeviceSerialNumber = '1264682310';
	const ApplicationAttended = false;		// Valid Values 'true', 'false' 
	const ApplicationLocation = 'OffPremises';		// Valid Values 'Unknown', 'OnPremises', 'OffPremises', 'HomeInternet' 
	const PINCapability = 'PINNotSupported';		// Valid Values 'PINNotSupported', 'PINPadInoperative', 'PINSupported', 'PINVerifiedByDevice', 'Unknown' 
	const ReadCapability = 'KeyOnly';		// Common Value Used 'HasMSR', 'KeyOnly' 
	const PTLSSocketId = 'MIIFCzCCA/OgAwIBAgICAoEwDQYJKoZIhvcNAQEFBQAwgbExNDAyBgNVBAMTK0lQIFBheW1lbnRzIEZyYW1ld29yayBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkxCzAJBgNVBAYTAlVTMREwDwYDVQQIEwhDb2xvcmFkbzEPMA0GA1UEBxMGRGVudmVyMRowGAYDVQQKExFJUCBDb21tZXJjZSwgSW5jLjEsMCoGCSqGSIb3DQEJARYdYWRtaW5AaXBwYXltZW50c2ZyYW1ld29yay5jb20wHhcNMTMwODI2MTcxMDI3WhcNMjMwODI0MTcxMDI3WjCBjDELMAkGA1UEBhMCVVMxETAPBgNVBAgTCENvbG9yYWRvMQ8wDQYDVQQHEwZEZW52ZXIxGjAYBgNVBAoTEUlQIENvbW1lcmNlLCBJbmMuMT0wOwYDVQQDEzR0ZHNwM25TZ0FJQUFBUDhBSCtDWUFBQUVBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUE9MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtn6ILI78EaOLcWrmI9RZf8Vj+3P/WcrDLimSyJJH/8LnIBbXNkiKcZSMg/KHqNLAtq/ncYqZcicgAfaoSbj9FxKGIXTDEICriv/i8sQIGFhIwW/V6H02E8SpWjdCQO9EUUaFPUVMhHfiabwJ3B0VODsQfVuG7mbrAvD/wAqiUVR2Q0rpgHkToCkytdhMlkXiFtnfy4nnoFnI6c5cmsQU7AZgI6Zr08pDMN9y3uSRGSJIzdcTohBA1qb8C4+ZVRCmwCfQZiBHxjC8c5DTiGlPQVEDfRjKXm6ffqBKCttX7qCeB0s57iob0Q7ucz8NfoWtY8dZVzMhYH8obU/dSXaZ6wIDAQABo4IBTjCCAUowCQYDVR0TBAIwADAdBgNVHQ4EFgQUJ64+T3k9d5nWfplPlxVZsN382XUwgeYGA1UdIwSB3jCB24AU3+ASnJQimuunAZqQDgNcnO2HuHShgbekgbQwgbExNDAyBgNVBAMTK0lQIFBheW1lbnRzIEZyYW1ld29yayBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkxCzAJBgNVBAYTAlVTMREwDwYDVQQIEwhDb2xvcmFkbzEPMA0GA1UEBxMGRGVudmVyMRowGAYDVQQKExFJUCBDb21tZXJjZSwgSW5jLjEsMCoGCSqGSIb3DQEJARYdYWRtaW5AaXBwYXltZW50c2ZyYW1ld29yay5jb22CCQD/yDY5hYVsVzA1BgNVHR8ELjAsMCqgKKAmhiRodHRwOi8vY3JsLmlwY29tbWVyY2UuY29tL2NhLWNybC5jcmwwDQYJKoZIhvcNAQEFBQADggEBAJrku2QD0T/0aT+jfFJA947Vf7Vu/6S1OxUGhMipx6z/izXZ+o4fK/Nsg0G39KvfxippFG/3MUo621dwXwtqq9SM72zy9ry9E0ptmEiG8X8bSVOyGj4MqyExCPs9LgloV5GgewqYRgq2hmbXOv8Gw7EeXGCfnQ+eROxGu1+p3ZWUnGMQnBbayg43npcHYfyLFHOzd57pj6ncYoxY3kun5GLMLr6tJXKpPNvbM5lAOzcAmKviPMCM2T53UzJlsRdVvCbnkrc5cYqN4l01elqr3MSsj6BJ+JqIqViFrYYkD34THKO8c+wZGb8IN+NJAVre9YOvt5+Cvbbd5ik0UQ+YQNM=';
	const EncryptionType = 'NotSet'; // Valid Values 'IPADV1Compatible', 'MagneSafeV4V5Compatible', 'NotSet'
	
	// MerchantProfile Values 
	const IndustryType = 'Ecommerce';		// Valid Values 'Ecommerce', 'MOTO', 'Retail', 'Restaurant' 
	const CustomerPresent = 'Ecommerce';		// Common Values Used [Ecommerce : Ecommerce] [MOTO : MOTO] [Retail/Restaurant : Present] 
	const RequestACI = 'IsCPSMeritCapable';		// In general default to 'IsCPSMeritCapable'. Other value is 'NotCPSMeritCapable' 
 	const EntryMode = 'Keyed'; //Valid Values [Ecommerce/MOTO : Keyed] [Retail/Restaurant : Keyed/TrackDataFromMSR] 
	
	// TransactionData Values 
	const TxnData_ProcessAsKeyed = true;		// 'true', 'false' Depending on industrytype toggle between a swipe example and a keyed transaction
	const TxnData_EntryMode = 'Keyed';		// [Ecommerce/MOTO : Keyed] [Retail/Restaurant : Keyed/TrackDataFromMSR] 
	const TxnData_OrderOfProcessingTracks = 'Track2|Track1|Keyed';		// The order consists of three values seperated by Pipe. Ex. Track2|Track1|Keyed 
	const TxnData_ProcessMagensaTxn = false; // Magensa is an End to End encryptions solution offered through MagTek	
	const TxnData_IndustryType = 'Ecommerce';		// Valid Values 'Ecommerce', 'MOTO', 'Retail', 'Restaurant' 
	const TxnData_CustomerPresent = 'Ecommerce';		// [Ecommerce : Ecommerce] [MOTO : MOTO] [Retail/Restaurant : Present] 
	const TxnData_UserId = 'UTest';				// Some services require a UserId and Password
	const TxnData_Password = 'UPassword';		// Some services require a UserId and Password
	// ** ALL THE FOLOWING WERE IN SINGLE QUOTES IN HTTP
	const TxnData_SignatureCaptured = false;		// 'true', 'false' - For retail/restaurant should be configurable in their software and should be marked whether or not software actually gets the signature for each transaction 
	const TxnData_IncludeAVS = true;		// 'true', 'false' 
	const TxnData_IncludeCV = true;			// 'true', 'false' 
	const TxnData_IncludeVPAS = false;		// 'true', 'false' 
	const TxnData_IncludeUCAF = false;		// 'true', 'false' 
	const TxnData_IncludeCFees = false;		// 'true', 'false'
	const TxnData_SoftDescriptors = true;		// 'true', 'false'
	// Support Tokenization
	const TxnData_SupportTokenization = true; // 'true', 'false'
	const TxnData_ProcessEncrypted = true;

	// Process as a BankcardTransaction object or as a BankcardTransactionPro object
	const ProcessAsBankcardTransaction_Pro = true;		// 'true', 'false' If set to true the following Pro parameters are required
	// THE FOLLOWING WAS 'true' NOT LEVEL1 IN HTTP
	const Pro_PurchaseCardLevel = Level1;		// 'Level1', 'Level2', 'Level3' 
	const Pro_InterchangeData = false;		// 'true', 'false'
	const Pro_IncludeLevel2OrLevel3Data = true;		// 'true', 'false'
	const Pro_IncludeAlternativeMerchantData = 'true';		// 'true', 'false'
	
	/// ACH Transaction Data Values
	const TxnData_SECCode = 'WEB'; //  WEB,PPD,CCD,BOC,TEL The three letter code that indicates what NACHA regulations the transaction must adhere to. Required.
	const TxnData_ServiceType = 'ACH';   //Indicates the Electronic Checking service type: ACH, RDC or ECK. Required.
	
	// Endpoint Management
	const BaseSvcEndpointPrimary = 'https://api.cert.nabcommerce.com/2.0.18/SvcInfo';
	const BaseSvcEndpointSecondary = 'https://api.cert.nabcommerce.com/2.0.18/SvcInfo';
	const BaseTxnEndpointPrimary = 'https://api.cert.nabcommerce.com/2.0.18/Txn';
	const BaseTxnEndpointSecondary = 'https://api.cert.nabcommerce.com/2.0.18/Txn';
	const BaseDataServicesEndpointPrimary = 'https://api.cert.nabcommerce.com/2.0.18/DataServices/TMS';
	const BaseDataServicesEndpointSecondary = 'https://api.cert.nabcommerce.com/2.0.18/DataServices/TMS';
	const URL_BaseURL = 'https://api.cert.nabcommerce.com/2.0.18/';
	const URL_RestURL = 'https://api.cert.nabcommerce.com/REST/2.0.18/';
}
?>