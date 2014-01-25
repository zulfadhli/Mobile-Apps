<?php 
	$id=$_GET['id'];
	$displayarray("Ini No 0","Ini No 2","Ini No 3","Ini No 4","Ini No 5","Ini No 6");

?>
<html>
<head>
	<title>MobileApps</title>
</head>
<body>
<center>
	<? echo $displayarray[$id];?><br>
	<a href="index.php?id=1">1</a><br>
	<a href="index.php?id=1">2</a><br>
	<a href="index.php?id=1">3</a><br>
	<a href="index.php?id=1">4</a><br>
	<a href="index.php?id=1">5</a><br>
	<a href="index.php?id=1">6</a><br>
</center>
</body>
</html>
