<?php
namespace OCFram;
 
class ImageValidator extends Validator
{
	protected $accept;

	public function __construct($errorMessage, $accept)
	{
	parent::__construct($errorMessage);

	$this->setAccept($accept);
	}

	public function isValid($value)
	{

	}

	public function setAccept($accept)
	{
		$this->accept = $accept;
	}
}