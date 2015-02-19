<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * DayStarts filter form base class.
 *
 * @package    zapnacrm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseDayStartsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'day_started_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'day_started_by'  => new sfWidgetFormFilterInput(),
      'shop_id'         => new sfWidgetFormFilterInput(),
      'is_day_closed'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'total_amount'    => new sfWidgetFormFilterInput(),
      'success'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'expected_amount' => new sfWidgetFormFilterInput(),
      'journal_id'      => new sfWidgetFormFilterInput(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
      'success'         => new sfWidgetFormFilterInput(),
      'day_start_id'    => new sfWidgetFormFilterInput(),
=======
>>>>>>> b799f6effd83b9aae0363e84c6d3a2dc50eae23c
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
    ));

    $this->setValidators(array(
      'day_started_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'day_started_by'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'shop_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_day_closed'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'total_amount'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
<<<<<<< HEAD
      'success'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'expected_amount' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'journal_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
=======
<<<<<<< HEAD
      'expected_amount' => new sfValidatorPass(array('required' => false)),
      'journal_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'success'         => new sfValidatorPass(array('required' => false)),
      'day_start_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
=======
      'success'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'expected_amount' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'journal_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
>>>>>>> b799f6effd83b9aae0363e84c6d3a2dc50eae23c
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
    ));

    $this->widgetSchema->setNameFormat('day_starts_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DayStarts';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'day_started_at'  => 'Date',
      'day_started_by'  => 'Number',
      'shop_id'         => 'Number',
      'is_day_closed'   => 'Boolean',
      'created_at'      => 'Date',
      'total_amount'    => 'Number',
<<<<<<< HEAD
      'success'         => 'Boolean',
      'expected_amount' => 'Number',
      'journal_id'      => 'Number',
=======
<<<<<<< HEAD
      'expected_amount' => 'Text',
      'journal_id'      => 'Number',
      'success'         => 'Text',
      'day_start_id'    => 'Number',
=======
      'success'         => 'Boolean',
      'expected_amount' => 'Number',
      'journal_id'      => 'Number',
>>>>>>> b799f6effd83b9aae0363e84c6d3a2dc50eae23c
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
    );
  }
}
