<!DOCTYPE html>
	<head>
		<title> Lab6 - Keep track of visitors </title>
	</head>
	<body>
		
	

<?php
	$handle = fopen("count.txt", "r");
	if(!$handle) {
		echo "could not open file";
	}
	else  {
		$cnt = fgets($handle);
		fclose($handle);
		$cnt += 1;
		echo "you are visitor no.".$cnt;
		$handle = fopen("count.txt", "w");
		fwrite($handle, $cnt);
		fclose($handle);		
	}
	

?>

</body>
</html>
