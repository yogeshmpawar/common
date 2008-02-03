<?php
class CoverageCodeN extends Doctrine_Record {
  
  public static function initMetadata($class) {
    $class->setTableName('coverage_codes');
    $class->setColumn('id', 'integer', 4, array('notnull' => true, 'primary' => true, 'autoincrement' => true));
    $class->setColumn('code', 'integer', 4, array (  'notnull' => true,  'notblank' => true,));
    $class->setColumn('description', 'string', 4000, array (  'notnull' => true,  'notblank' => true,));
  }
}
