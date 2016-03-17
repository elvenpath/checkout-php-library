<?php
namespace com\checkout\ApiServices\AlternativePayments\RequestModels;
/**
 * Class AlternativePaymentChargeCreate
 * @package com\checkout\ApiServives\AlternativePayments\RequestModels
 * @note make a magic function that convert in the concept of postedParam
 */
class AlternativePaymentChargeCreate extends BaseAlternativePayment
{
	protected $_baseCardCreate;
	protected $_transactionIndicator;

	/**
	 * @return mixed
	 */
	public function getBaseCardCreate ()
	{
		return $this->_baseCardCreate;
	}

	/**
	 * @param mixed $baseCardCreate
	 */
	public function setBaseCardCreate ( \com\checkout\ApiServices\Cards\RequestModels\BaseCardCreate $baseCardCreate )
	{
		$this->_baseCardCreate = $baseCardCreate;
	}

    /**
     * @return mixed
     */
    public function getTransactionIndicator()
    {
        return $this->_transactionIndicator;
    }

    /**
     * @param mixed $transactionIndicator
     */
    public function setTransactionIndicator($transactionIndicator)
    {
        $this->_transactionIndicator = $transactionIndicator;
    }
}