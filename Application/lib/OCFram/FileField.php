<?php
namespace OCFram;
 
class FileField extends Field
{

	public function buildWidget()
	{
	$widget = '';

	if (!empty($this->errorMessage))
	{
	  $widget .= $this->errorMessage.'<br />';
	}

	$widget .= '<label>'.$this->label.'</label><input class="form-control-file" type="file" name="'.$this->name.'"';

	if (!empty($this->value))
	{
	  $widget .= ' value="'.htmlspecialchars($this->value).'"';
	}

	return $widget .= ' />';
	}
}