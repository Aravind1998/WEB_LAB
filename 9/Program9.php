<?php
	header('Content-Type: text/plain');
	$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
	$statesArray = [];
	$states1 = explode(' ', $allTheStates);
	$i = 0;
	print "Array : " . $allTheStates . "\n";

	//states that ends in 'xas'
	foreach ($states1 as $state) 
	{
		if (preg_match('/xas$/', ($state))) 
		{
			$statesArray[$i] = ($state);
			$i = $i + 1;
			echo "\n\nPart A : The States that ends in 'xas' :" . $state;
		}
	}

	//states that begins with 'k' and ends in 's'
	foreach ($states1 as $state) 
	{
		if (preg_match('/^k.*s$/i', ($state))) 
		{
			$statesArray[$i] = ($state);
			$i = $i + 1;
			echo "\n\nPart B : The States that begins with 'k' and ends in 's' :" . $state;
		}
	}

	//states that begins with 'M' and ends in 's'
	foreach($states1 as $state) 
	{
		if (preg_match('/^M.*s$/', ($state))) 
		{
			$statesArray[$i] = ($state);
			$i = $i + 1;
			echo "\n\nPart C : The States that begins with 'M' and ends in 's' :" . $state;
		}
	}

	//states that ends in 'a'
	foreach($states1 as $state) 
	{
		if (preg_match('/a$/', ($state))) 
		{
			$statesArray[$i] = ($state);
			$i = $i + 1;
			echo "\n\nPart D : The states that ends in 'a' :" . $state;
		}
	}

	print "\n";

	foreach ($statesArray as $element => $value) 
	{
		print( "\n" . $value . " is the element " . $element);
	}
?>
