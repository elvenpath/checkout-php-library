<?php

namespace com\checkout\ApiServices\SharedModels;


class LocalPayment
{
	protected $_lppId;
    protected $_userData;
    protected $_paymentUrl;

	/**
	 * @return mixed
	 */
	public function getLppId ()
	{
		return $this->_lppId;
	}

	/**
	 * @param mixed $lppId
	 */
	public function setLppId ( $lppId )
	{
		$this->_lppId = $lppId;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentUrl ()
	{
		return $this->_paymentUrl;
	}

	/**
	 * @param mixed $paymentUrl
	 */
	public function setPaymentUrl ( $paymentUrl )
	{
		$this->_paymentUrl = $paymentUrl;
	}

	/**
	 * @return mixed
	 */
	public function getUserData ()
	{
		return $this->_userData;
	}

	/**
	 * @param mixed $userData
	 */
	public function setUserData ( UserData $userData )
	{
		$this->_userData = $userData;
	}
}