<?php
namespace OCFram;
 
class ImageValidator extends Validator
{
	protected $extensions = [];

	public function __construct($errorMessage, $extensions)
	{
	parent::__construct($errorMessage);

	$this->setExtensions($extensions);
	}

	public function isValid($value)
	{
		$valid = 0;

		foreach($this->extensions as $extension)
		{
			$pattern = '#.'.$extension.'$#';

			if(preg_match($pattern, $value))
			{
				$valid = 1;
			}
		}

		return $valid != 0;			
	}

	public function setExtensions($extensions)
	{
		$this->extensions = $extensions;
	}
}