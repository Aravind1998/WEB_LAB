<html>
<head>
<title>Date and time</title>
<meta charset = "utf-8">
<meta http-equiv = "refresh" content = "1">
</head>
<body>
 <h1>Date and time</h1>
 <?php
	date_default_timezone_set("Asia/Calcutta");
	echo "Current date : ".date("d/m/Y")."<br>";
	echo "\n";
	echo "Current time :".date("h:i:s");
  ?>
</body>
</html>
