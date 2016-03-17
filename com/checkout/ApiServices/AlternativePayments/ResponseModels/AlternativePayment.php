<?php

namespace com\checkout\ApiServices\AlternativePayments\ResponseModels;


class AlternativePayment extends \com\checkout\ApiServices\SharedModels\BaseHttp
{
	protected $_object;
	protected $_id;
	protected $_liveMode;
    protected $_chargeMode;
	protected $_responseCode;
	protected $_localPayment;
	protected $_response = null;
	


	public function __construct($response)
	{
        parent::__construct($response);
		$this->setResponse($response);
		$this->_setObject ( $response->getObject());
		$this->_setId ( $response->getId());
		$this->_setLiveMode ( $response->getLiveMode());
		$this->_setChargeMode ( $response->getChargeMode());
		$this->_setResponseCode ( $response->getResponseCode());
		$this->_setLocalPayment ( $response->getLocalPayment());

		$this->_setResponse ( $response->getResponse());
	}

	public function setResponse($response)
	{
		$this->_response = $response;
	}

	public function getResponse($response)
	{
		return $this->_response;
	}

	/**
	 * @return mixed
	 */
	public function getObject ()
	{
		return $this->_object;
	}

	/**
	 * @return mixed
	 */
	public function getId ()
	{
		return $this->_id;
	}

	/**
	 * @return mixed
	 */
	public function getLiveMode ()
	{
		return $this->_liveMode;
	}
    
    /**
	 * @return mixed
	 */
	public function getChargeMode ()
	{
		return $this->_chargeMode;
	}

	/**
	 * @return mixed
	 */
	public function getLocalPayment ()
	{
		return $this->_localPayment;
	}

	/**
	 * @param mixed $object
	 */
	protected function _setObject ( $object )
	{
		$this->_object = $object;
	}

	/**
	 * @param mixed $id
	 */

	protected function _setId ( $id )
	{
		$this->_id = $id;
	}

	/**
	 * @param mixed $liveMode
	 */
	protected function _setLiveMode ( $liveMode )
	{
		$this->_liveMode = $liveMode;
	}
    
    /**
	 * @param mixed $chargeMode
	 */
	protected function _setChargeMode ( $chargeMode )
	{
		$this->_chargeMode = $chargeMode;
	}

	/**
	 * @param mixed $responseCode
	 */
	protected function _setResponseCode ( $responseCode )
	{
		$this->_responseCode = $responseCode;
	}

	/**
	 * @param mixed $localPayment
	 */
	protected function _setLocalPayment ( $localPayment )
	{
		$this->_localPayment = $localPayment;
	}

	/**
	 * @param null $response
	 */
	protected function _setResponse ( $response )
	{
		$this->_response = $response;
	}

}