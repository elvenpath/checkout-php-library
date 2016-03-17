<?php
namespace com\checkout\ApiServices\AlternativePayments\RequestModels;

class BaseAlternativePayment extends \com\checkout\ApiServices\SharedModels\BaseHttp
{
	protected $_email;
    protected $_paymentToken;
	protected $_localPayment;

	/**
	 * @return mixed
	 */
	public function getPaymentToken ()
	{
		return $this->_paymentToken;
	}

	/**
	 * @param mixed $paymentToken
	 */
	public function setPaymentToken ( $paymentToken )
	{
		$this->_paymentToken = $paymentToken;
	}
    
	/**
	 * @return mixed
	 */
	public function getEmail ()
	{
		return $this->_email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail ( $email )
	{
		$this->_email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getLocalPayment ()
	{
		return $this->_localPayment;
	}

	/**
	 * @param mixed $localPayment
	 */
	public function setLocalPayment ( \com\checkout\ApiServices\SharedModels\LocalPayment $localPayment )
	{
		$this->_localPayment = $localPayment;
	}


}