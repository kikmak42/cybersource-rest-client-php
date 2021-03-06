# Ptsv2creditsProcessingInformationBankTransferOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerMemo** | **string** | Payment related information.  This information is included on the customer’s statement. | [optional] 
**secCode** | **string** | Authorization method used for the transaction. See \&quot;SEC Codes,\&quot; page 89.  TeleCheck Accepts only the following values: - **PPD** - **TEL** - **WEB** | [optional] 
**terminalCity** | **string** | City in which the terminal is located. If more than four alphanumeric characters are submitted, the transaction will be declined.  You cannot include any special characters. | [optional] 
**terminalState** | **string** | State in which the terminal is located. If more than two alphanumeric characters are submitted, the transaction will be declined.  You cannot include any special characters. | [optional] 
**effectiveDate** | **string** | Effective date for the transaction. The effective date must be within 45 days of the current day. If you do not include this value, CyberSource sets the effective date to the next business day.  Format: &#x60;MMDDYYYY&#x60;  Supported only for the CyberSource ACH Service. | [optional] 
**partialPaymentId** | **string** | Identifier for a partial payment or partial credit.  The value for each debit request or credit request must be unique within the scope of the order. See \&quot;Multiple Partial Credits,\&quot; page 41. | [optional] 
**settlementMethod** | **string** | Method used for settlement.  Possible values: - **A**: Automated Clearing House (default for credits and for transactions using Canadian dollars) - **F**: Facsimile draft (U.S. dollars only) - **B**: Best possible (U.S. dollars only) (default if the field has not already been configured for your merchant ID)  See \&quot;Settlement Delivery Methods,\&quot; page 44. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


