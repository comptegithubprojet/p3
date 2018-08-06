<?php
namespace OCFram;
 
class StringField extends Field
{
    protected $maxLength;
   
    public function buildWidget()
    {
      $widget = '';
   
      $widget .= '<label>'.$this->label.'</label><input class="form-control" type="text" name="'.$this->name.'"';
   
      if (!empty($this->value))
      {
        $widget .= ' value="'.htmlspecialchars($this->value).'"';
      }
   
      if (!empty($this->maxLength))
      {
        $widget .= ' maxlength="'.$this->maxLength.'"';
      }

      if (!empty($this->errorMessage))
      {
        $widget .= ' style=border-color:red;';
      }
   
      $widget .= ' />';

      if (!empty($this->errorMessage))
      {
        $widget .= '<p id=msg_erreur_form>'.$this->errorMessage.'<p/>';
      }

      return $widget;
    }
 
  public function setMaxLength($maxLength)
  {
    $maxLength = (int) $maxLength;
 
    if ($maxLength > 0)
    {
      $this->maxLength = $maxLength;
    }
    else
    {
      throw new \RuntimeException('La longueur maximale doit être un nombre supérieur à 0');
    }
  }
}