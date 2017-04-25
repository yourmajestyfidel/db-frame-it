<?php
include_once('View.php');
include_once('DB.php');
$template = new View();
$database = new DB();

$query_results = $database->query( 'select * from hs_teachers' );
$the_data= $query_results->fetchAll();

// put the sql results into a new template variable $the_data
// Now lets store it in the template
$template->my_data=$the_data;

//We can create other variables too and put them in the template.
$template->name="Fidel Mejia";

$current_date= "March 8, 2017";
$template->updated = $current_date; 

$template->course="Information Technology";

// This file can be found in the templates directory.
$template->render( 'second.php' );
