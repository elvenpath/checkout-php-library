<?php

namespace com\checkout\ApiServices\SharedModels;


class UserData
{
	protected $_issuerId;

	/**
	 * @return mixed
	 */
	public function getIssuerId ()
	{
		return $this->_countryCode;
	}

	/**
	 * @param mixed $issuerId
	 */
	public function setIssuerId ( $issuerId )
	{
		$this->_issuerId = $issuerId;
	}


    public function getUserDataDetails()
    {
        return array(
            'issuerId'      => $this->_issuerId
        );
    }
}