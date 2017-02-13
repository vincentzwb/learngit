<?php
class TestJobExtendRecord extends WfInputFormRecord
{
        public function getRawInputFormFields()
        {
          return array();
        }
        public function rules()
        {
          return array();
        }
        public function tableName()
        {
                return '';
        }
        public static function model($className=__CLASS__)
        {
                return parent::model($className);
        }        
}
