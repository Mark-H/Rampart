<?php
/**
 * @package rampart
 */
$xpdo_meta_map['rptBanMatch']= array (
  'package' => 'rampart',
  'table' => 'rampart_ban_matches',
  'fields' => 
  array (
    'username' => '',
    'username_match' => '',
    'hostname' => NULL,
    'hostname_match' => NULL,
    'email' => NULL,
    'email_match' => NULL,
    'ip' => NULL,
    'ip_match' => NULL,
    'useragent' => NULL,
    'createdon' => NULL,
    'resource' => 0,
  ),
  'fieldMeta' => 
  array (
    'username' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'username_match' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'hostname' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'hostname_match' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'email' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'email_match' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'ip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '60',
      'phptype' => 'string',
      'null' => true,
    ),
    'ip_match' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '60',
      'phptype' => 'string',
      'null' => true,
    ),
    'useragent' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'createdon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'resource' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'aggregates' => 
  array (
    'Resource' => 
    array (
      'class' => 'modResource',
      'local' => 'resource',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
  'composites' => 
  array (
    'Bans' => 
    array (
      'class' => 'rptBanMatchBan',
      'local' => 'id',
      'foreign' => 'ban_match',
      'cardinality' => 'many',
      'owner' => 'foreign',
    ),
  ),
);
