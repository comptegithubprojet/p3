<?php
namespace OCFram;
 
class FileField extends Field
{

	public function buildWidget()
	{
		$widget = '';

		$widget .= '<label>'.$this->label.'</label><input class="form-control-file" type="file" name="'.$this->name.'"';

		if (!empty($this->value))
		{
		  $widget .= ' value="'.htmlspecialchars($this->value).'"';
		}

		$widget .= ' />';

		if (!empty($this->errorMessage))
		{
		  $widget .= '<p id=msg_erreur_form>'.$this->errorMessage.'<p/>';
		}

		return $widget;
	}
}