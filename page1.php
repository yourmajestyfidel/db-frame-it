<?php

include_once('View.php');
include_once('DB.php');

$template = new View();
$database = new DB();

$query_results = $database->query( 'select * from cars limit 10' );

$template->query_results = $query_results;

// This file can be found in the templates directory.
$template->render( 'page1.php' );
