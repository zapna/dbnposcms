<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Country filter form base class.
 *
 * @package    zapnacrm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseCountryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(),
      'code'           => new sfWidgetFormFilterInput(),
      'calling_code'   => new sfWidgetFormFilterInput(),
      'cbf_rate'       => new sfWidgetFormFilterInput(),
      'taisys_rate'    => new sfWidgetFormFilterInput(),
      'web_sms_status' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'code'           => new sfValidatorPass(array('required' => false)),
      'calling_code'   => new sfValidatorPass(array('required' => false)),
      'cbf_rate'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'taisys_rate'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'web_sms_status' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('country_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Country';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'code'           => 'Text',
      'calling_code'   => 'Text',
      'cbf_rate'       => 'Number',
      'taisys_rate'    => 'Number',
      'web_sms_status' => 'Number',
    );
  }
}
