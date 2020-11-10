<?php

/**
 * Config Setup
 * 
 */

define( 'ROOT', dirname( __DIR__ ) . DIRECTORY_SEPARATOR ) ;
define( 'APP',      ROOT . 'App' . DIRECTORY_SEPARATOR);
define( 'VIEW',     ROOT . 'App' . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR ) ;
define( 'MODEL',    ROOT . 'App' . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR ) ;
define( 'CONTROLLER', ROOT . 'App' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR ) ;
define( 'DATA',     ROOT . 'App' . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR ) ;
define( 'CORE',     ROOT . 'App' . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR ) ;
define( 'TRANSPORT', ROOT . 'App' . DIRECTORY_SEPARATOR . 'Transport' . DIRECTORY_SEPARATOR) ;

$modules = [ ROOT, APP, CORE, CONTROLLER, DATA, TRANSPORT ] ;

set_include_path( get_include_path() . PATH_SEPARATOR . implode( PATH_SEPARATOR, $modules )  ) ;

spl_autoload_register( 'spl_autoload', false );





/**
 * Test Run of Batch File
 * @var array $test_consignment
 */

$test_consignment = [
    'id' => '007',
    'ccid' => 'cn876562',
    'weight' => 11,
    'length' => 120,
    'width' => 90,
    'height' => 100,
    'contents' => 'household',
    'declarations' => 'Nothing to declare',
    'recipientname' => 'joe bloggs',
    'recipientaddress' => 'any street',
    'recipientphone' => '01234567890',
    'recipientemail' => 'any@email.com',
    'depot' => 'MN',
    'courier' => "UPS",
    'datecreated' => date("Y-m-d H:i:s"),
    'createdby' => 'gear',
    'dateupdated' => date("Y-m-d H:i:s")
];

// init
$test_batch = new BatchProcessing();

// add single consignment test data
$consignment = new Consignment($test_consignment);

// assign consignment to batch setup
$test_batch->consignment = $consignment ;

// run batch process on consignment
$test_batch -> runBatch();


