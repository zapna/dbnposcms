<?php

/**
 * DayEnds form base class.
 *
 * @package    zapnacrm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseDayEndsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'day_ended_at'    => new sfWidgetFormDateTime(),
      'day_ended_by'    => new sfWidgetFormInput(),
      'shop_id'         => new sfWidgetFormInput(),
      'day_start_id'    => new sfWidgetFormInput(),
      'created_at'      => new sfWidgetFormDateTime(),
      'total_amount'    => new sfWidgetFormInput(),
      'success'         => new sfWidgetFormInputCheckbox(),
      'expected_amount' => new sfWidgetFormInput(),
      'cash'            => new sfWidgetFormInput(),
      'card'            => new sfWidgetFormInput(),
      'voucher'         => new sfWidgetFormInput(),
      'sale'            => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'DayEnds', 'column' => 'id', 'required' => false)),
      'day_ended_at'    => new sfValidatorDateTime(array('required' => false)),
      'day_ended_by'    => new sfValidatorInteger(array('required' => false)),
      'shop_id'         => new sfValidatorInteger(array('required' => false)),
      'day_start_id'    => new sfValidatorInteger(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
      'total_amount'    => new sfValidatorNumber(array('required' => false)),
      'success'         => new sfValidatorBoolean(array('required' => false)),
      'expected_amount' => new sfValidatorNumber(array('required' => false)),
<<<<<<< HEAD
=======
<<<<<<< HEAD
      'cash'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'card'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'voucher'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sale'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
=======
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
      'cash'            => new sfValidatorNumber(array('required' => false)),
      'card'            => new sfValidatorNumber(array('required' => false)),
      'voucher'         => new sfValidatorNumber(array('required' => false)),
      'sale'            => new sfValidatorNumber(array('required' => false)),
<<<<<<< HEAD
=======
>>>>>>> b799f6effd83b9aae0363e84c6d3a2dc50eae23c
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
    ));

    $this->widgetSchema->setNameFormat('day_ends[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DayEnds';
  }


}
