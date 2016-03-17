<?php

namespace com\checkout\ApiServices\AlternativePayments\ResponseModels;


class AlternativePaymentLookupDetails extends \com\checkout\ApiServices\SharedModels\BaseHttp
{
	protected $_object;
	protected $_lookupDetails;
	protected $_lookupValues;
	protected $_response = null;
	

	public function __construct($response)
	{
        parent::__construct($response);
		$this->setResponse($response);
		$this->_setObject ( $response->getObject());
		$this->_setLookupDetails ( $response->getLookupDetails());

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
	public function getLookupDetails ()
	{
		return $this->_lookupDetails;
	}

	/**
	 * @return mixed
	 */
	public function getLookupValues ()
	{
		return $this->_lookupValues;
	}

	/**
	 * @return mixed
	 */
	public function getLookupValuesForTag ($tag)
	{
		$valuesArray = $this->_lookupDetails->toArray();

		$valuesToReturn = array();
		if($valuesArray) {
			foreach($valuesArray as $item){
				if ($item['tagName'] === $tag) {
					$valuesToReturn = $item['values'];
				}
			}
		}

		return $valuesToReturn;
	}

	/**
	 * @param mixed $object
	 */
	protected function _setObject ( $object )
	{
		$this->_object = $object;
	}

	/**
	 * @param mixed $lookupDetails
	 */

	protected function _setLookupDetails ( $lookupDetails )
	{
		$this->_lookupDetails = $lookupDetails;
	}

	/**
	 * @param mixed $lookupValues
	 */

	protected function _setLookupValues ( $lookupValues )
	{
		$valuesArray = $lookupValues->toArray();
		$valuesToReturn = array();
		if($valuesArray) {
			foreach($valuesArray as $item){
				$value  = new \com\checkout\ApiServices\SharedModels\LookupValues();
				$value->setTagName($item['tagName']);
				$value->setValues($item['values']);
				$valuesToReturn[] = $value;
			}
		}
		$this->_lookupValues = $valuesToReturn;
	}

	/**
	 * @param null $response
	 */
	protected function _setResponse ( $response )
	{
		$this->_response = $response;
	}

}