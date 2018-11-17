<html>
<head>
    <title>Jawaban No.4</title>
</head>
<body>
	<?php
	$startdate=strtotime("2018-11-01");
	$enddate=strtotime("2018-11-05");

	while ($startdate <= $enddate) {
	  echo date("Y-m-d", $startdate) . "<br>";
	  $startdate = strtotime("+1 day", $startdate);
	}
	?>
</body>
</html>