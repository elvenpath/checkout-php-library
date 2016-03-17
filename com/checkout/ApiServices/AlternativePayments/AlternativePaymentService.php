<?php
namespace com\checkout\ApiServices\AlternativePayments;

class AlternativePaymentService extends \com\checkout\ApiServices\BaseServices
{


	/**
	 * @param String
	 * @return ResponseModels\Charge
	 */

	public function verifyAlternativePaymentCharge($paymentToken)
	{

		$requestPayload = array (
			'authorization' => $this->_apiSetting->getSecretKey(),
			'mode'          => $this->_apiSetting->getMode(),
			'method'        => 'GET',


		);


		$retrieveChargeWithChargeUri = sprintf ($this->_apiUrl->getRetrieveChargesApiUri(),
			$paymentToken);

		$processCharge = \com\checkout\helpers\ApiHttpClient::getRequest($retrieveChargeWithChargeUri,
			$this->_apiSetting->getSecretKey(),$requestPayload);

		$responseModel = new \com\checkout\ApiServices\Charges\ResponseModels\Charge($processCharge);
		return $responseModel;
	}

	/**
	 * Creates a charge with Alternative Payment details.
	 * @param RequestModels\AlternativePaymentChargeCreate $requestModel
	 * @return ResponseModels\AlternativePayment
	 */

	public function chargeWithAlternativePayment(RequestModels\BaseAlternativePayment $requestModel)
	{

		$alternativePaymentMapper = new AlternativePaymentMapper($requestModel);

		$requestPayload = array (
			'authorization' => $this->_apiSetting->getSecretKey(),
			'mode'          => $this->_apiSetting->getMode(),
			'postedParam'   => $alternativePaymentMapper->requestPayloadConverter(),

		);

		echo var_dump($requestPayload);

		$processCharge = \com\checkout\helpers\ApiHttpClient::postRequest($this->_apiUrl->getAlternativePaymentChargeApiUri(),
			$this->_apiSetting->getSecretKey(),$requestPayload);
      
		$responseModel = new ResponseModels\AlternativePayment($processCharge);

		return $responseModel;
	}

	public function retrieveAlternativePaymentDetails($lppId)
	{


		$requestPayload = array (
			'authorization' => $this->_apiSetting->getSecretKey(),
			'mode'          => $this->_apiSetting->getMode(),
			'method'         => 'GET',
		);

		$retrieveAlternativePaymentDetailsUri = sprintf ($this->_apiUrl->getAlternativePaymentLookupApiUri(), $lppId);

		$processCharge = \com\checkout\helpers\ApiHttpClient::getRequest($retrieveAlternativePaymentDetailsUri,
			$this->_apiSetting->getSecretKey(),$requestPayload);

		$responseModel = new ResponseModels\AlternativePaymentLookupDetails($processCharge);
		return $responseModel;
	}

}
