<?php
/**
 * Created by PhpStorm.
 * User: dhiraj.gangoosirdar
 * Date: 3/17/2015
 * Time: 9:27 AM
 */

namespace com\checkout\ApiServices\AlternativePayments;


class AlternativePaymentMapper
{
	private $_requestModel;

	public  function __construct( $requestModel)
	{
		$this->setRequestModel($requestModel);
	}
	/**
	 * @return mixed
	 */
	public function getRequestModel ()
	{
		return $this->_requestModel;
	}

	/**
	 * @param mixed $requestModel
	 */
	public function setRequestModel ( $requestModel )
	{
		$this->_requestModel = $requestModel;
	}

	public function requestPayloadConverter($requestModel = null )
	{
		$requestPayload = null;
		if(!$requestModel) {
			$requestModel = $this->getRequestModel();
		}
		if($requestModel) {
			$requestPayload = array ();

			if(method_exists($requestModel,'getEmail') && $requestModel->getEmail()) {
				$requestPayload['email'] = $requestModel->getEmail();
			}

			if(method_exists($requestModel,'getPaymentToken') && $paymentToken = $requestModel->getPaymentToken()) {
				$requestPayload[ 'paymentToken' ] = $paymentToken;
			}

			if( method_exists($requestModel,'getLocalPayment') && $localPayment = $requestModel->getLocalPayment()) {
				$localPaymentConfig = array (
					'lppId' => $localPayment->getLppId()
				);
                
            if ($localPayment->getUserData() != null) {
              //   $localPaymentConfig = array_merge_recursive($localPaymentConfig, array(
              //      'issuerId' => $localPayment->getUserData()->getUserDataDetails()
              //   )
              // );

            	$localPaymentConfig['userData'] = $localPayment->getUserData()->getUserDataDetails();
            }
            $requestPayload['localPayment'] = $localPaymentConfig;
		}
	}
	
	return $requestPayload;

	}
}