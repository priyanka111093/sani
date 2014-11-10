

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
	<link rel="stylesheet" href="sani.css"/>
</head>

<body>
	<h1>my test site</h1>
	<?php 
	$name=$_REQUEST['name'];
	$age=$_REQUEST['age'];
	
	echo("hello,$name your ageis $age");
	?>
</body>

</html>
