<?php

/**
 * EnableCountry form base class.
 *
 * @package    zapnacrm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseEnableCountryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInput(),
      'language'        => new sfWidgetFormInput(),
      'language_symbol' => new sfWidgetFormInput(),
      'currency'        => new sfWidgetFormInput(),
      'currency_symbol' => new sfWidgetFormInput(),
      'status'          => new sfWidgetFormInput(),
      'ceated_at'       => new sfWidgetFormDateTime(),
      'base_url'        => new sfWidgetFormInput(),
      'refill'          => new sfWidgetFormInput(),
      'calling_code'    => new sfWidgetFormInput(),
      'cbf_rate'        => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'EnableCountry', 'column' => 'id', 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 300)),
      'language'        => new sfValidatorString(array('max_length' => 300)),
      'language_symbol' => new sfValidatorString(array('max_length' => 300)),
      'currency'        => new sfValidatorString(array('max_length' => 300)),
      'currency_symbol' => new sfValidatorString(array('max_length' => 300)),
      'status'          => new sfValidatorInteger(),
      'ceated_at'       => new sfValidatorDateTime(),
      'base_url'        => new sfValidatorString(array('max_length' => 300)),
      'refill'          => new sfValidatorString(array('max_length' => 400)),
      'calling_code'    => new sfValidatorString(array('max_length' => 50)),
      'cbf_rate'        => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('enable_country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EnableCountry';
  }


}
