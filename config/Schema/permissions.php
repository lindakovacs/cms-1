<?php

class permissions {

	public $fields = array (
  '_constraints' => 
  array (
    'primary' => 
    array (
      'type' => 'primary',
      'columns' => 
      array (
        0 => 'id',
      ),
      'length' => 
      array (
      ),
    ),
  ),
  'id' => 
  array (
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'autoIncrement' => true,
    'precision' => NULL,
  ),
  'aco_id' => 
  array (
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'precision' => NULL,
    'autoIncrement' => NULL,
  ),
  'role_id' => 
  array (
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'precision' => NULL,
    'autoIncrement' => NULL,
  ),
);

	public $records = array (
  0 => 
  array (
    'id' => 1,
    'aco_id' => 79,
    'role_id' => 2,
  ),
  1 => 
  array (
    'id' => 2,
    'aco_id' => 79,
    'role_id' => 3,
  ),
  2 => 
  array (
    'id' => 3,
    'aco_id' => 80,
    'role_id' => 2,
  ),
  3 => 
  array (
    'id' => 4,
    'aco_id' => 80,
    'role_id' => 3,
  ),
  4 => 
  array (
    'id' => 5,
    'aco_id' => 81,
    'role_id' => 2,
  ),
  5 => 
  array (
    'id' => 6,
    'aco_id' => 81,
    'role_id' => 3,
  ),
  6 => 
  array (
    'id' => 7,
    'aco_id' => 82,
    'role_id' => 2,
  ),
  7 => 
  array (
    'id' => 8,
    'aco_id' => 82,
    'role_id' => 3,
  ),
  8 => 
  array (
    'id' => 9,
    'aco_id' => 83,
    'role_id' => 2,
  ),
  9 => 
  array (
    'id' => 10,
    'aco_id' => 83,
    'role_id' => 3,
  ),
);

}

