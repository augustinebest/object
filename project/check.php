<?php
	include("Extent.php");
	// Using our PHP objects in our PHP pages. 
	$stefan = new person("Stefan Sucks");
	echo "Stefan's full name: " . $stefan->get_name();

	$james = new employee("Johnny Fingers");
	echo "---> " . $james->get_name();

?>