<?php

namespace com\checkout\ApiServices\SharedModels;

class LookupValues
{
	protected $_tagNname;
	protected $_values;

	/**
	 * @return mixed
	 */
	public function getTagName ()
	{
		return $this->_tagNname;
	}

	/**
	 * @param mixed $tagNname
	 */
	public function setTagName ( $tagNname )
	{
		$this->_tagNname = $tagNname;
	}

	/**
	 * @return mixed
	 */
	public function getValues ()
	{
		return $this->_values;
	}

	/**
	 * @param mixed $values
	 */
	public function setValues ( $values )
	{
		$this->_values = $values;
	}

}