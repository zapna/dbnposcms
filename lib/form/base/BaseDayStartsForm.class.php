<?php

/**
 * DayStarts form base class.
 *
 * @package    zapnacrm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseDayStartsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'day_started_at' => new sfWidgetFormDateTime(),
      'day_started_by' => new sfWidgetFormInput(),
      'shop_id'        => new sfWidgetFormInput(),
      'is_day_closed'  => new sfWidgetFormInput(),
      'created_at'     => new sfWidgetFormDateTime(),
      'total_amount'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'DayStarts', 'column' => 'id', 'required' => false)),
      'day_started_at' => new sfValidatorDateTime(array('required' => false)),
      'day_started_by' => new sfValidatorInteger(array('required' => false)),
      'shop_id'        => new sfValidatorInteger(array('required' => false)),
      'is_day_closed'  => new sfValidatorInteger(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'total_amount'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('day_starts[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DayStarts';
  }


}
