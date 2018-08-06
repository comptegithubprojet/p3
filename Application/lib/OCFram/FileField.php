<?php
namespace OCFram;
 
class FileField extends Field
{

	public function buildWidget()
	{
		$widget = '<div class="clearfix" id=input-file-form';

		if (!empty($this->errorMessage))
		{
		$widget .= ' style="border:1px solid red;"';
		}

		$widget .= '>';

		$widget .= 
		'<p id="header-file-input">Image</p>

		<p><img class="img-responsive" id="preview_image_form" src="'; 

			if (!empty($this->value)) 
			{
				$widget .= '/images/'.$this->value; 
			}

		$widget .= '" /></p>

		<label id="btn-file-input" for="file-input" role="btn" class="btn btn-primary pull-right">'.$this->label.'</label>
		<input onchange="readURL(this);" id="file-input"  type="file" name="'.$this->name.'"/></div>';

		if (!empty($this->errorMessage))
		{
		  $widget .= '<p id=msg_erreur_form>'.$this->errorMessage.'<p/>';
		}

		return $widget;
	}
}