<!DOCTYPE html>
<head>
<link rel="stylesheet" href="mycss/styles.css" />	
</head>

<html>
<body>
<?php

// Just grab whatever data was stored in the template

echo "<h1>Modified by: $this->name </H1>";
echo "<h2>Todays Date: $this->updated </H2>";


$current_data = $this->my_data;
echo "<table>";

foreach ($current_data as $row ) 
	{
		
	$current_row = $row;	
    echo "<tr>";     
	echo "<td> $current_row[0] </td>";
	echo "<td> $current_row[1] </td>";
	echo "<td> $current_row[2] </td>";
	echo "</tr>";
	}
	
echo "</table>";
	



?>
</body>
</html>
