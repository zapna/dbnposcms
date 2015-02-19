<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Journal filter form base class.
 *
 * @package    zapnacrm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseJournalFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
<<<<<<< HEAD
      'shop_id'      => new sfWidgetFormFilterInput(),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_date' => new sfWidgetFormFilterInput(),
      'updated_by'   => new sfWidgetFormFilterInput(),
      'journal_id'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
=======
<<<<<<< HEAD
      'shop_id'            => new sfWidgetFormFilterInput(),
      'day_starts_journal' => new sfWidgetFormFilterInput(),
      'journal_id'         => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_by'         => new sfWidgetFormFilterInput(),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'shop_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'day_starts_journal' => new sfValidatorPass(array('required' => false)),
      'journal_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_by'         => new sfValidatorPass(array('required' => false)),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
=======
      'shop_id'      => new sfWidgetFormFilterInput(),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_date' => new sfWidgetFormFilterInput(),
      'updated_by'   => new sfWidgetFormFilterInput(),
      'journal_id'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
      'shop_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_date' => new sfValidatorPass(array('required' => false)),
      'updated_by'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'journal_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
<<<<<<< HEAD
=======
>>>>>>> b799f6effd83b9aae0363e84c6d3a2dc50eae23c
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
    ));

    $this->widgetSchema->setNameFormat('journal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Journal';
  }

  public function getFields()
  {
    return array(
<<<<<<< HEAD
=======
<<<<<<< HEAD
      'id'                 => 'Number',
      'shop_id'            => 'Number',
      'day_starts_journal' => 'Text',
      'journal_id'         => 'Number',
      'created_at'         => 'Date',
      'updated_by'         => 'Text',
      'updated_at'         => 'Date',
      'created_date'       => 'Date',
=======
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
      'id'           => 'Number',
      'shop_id'      => 'Number',
      'updated_at'   => 'Date',
      'created_at'   => 'Date',
      'created_date' => 'Text',
      'updated_by'   => 'Number',
      'journal_id'   => 'Number',
<<<<<<< HEAD
=======
>>>>>>> b799f6effd83b9aae0363e84c6d3a2dc50eae23c
>>>>>>> b7ab7e902388d4ed3cc2a72d76c598b91bc5b602
    );
  }
}
