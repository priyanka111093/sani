<?php
$name="priyanka";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
	<link rel="stylesheet" href="sani.css"/>
</head>

<body><p> <p>This is a paragraph</p>
<p>This is another paragraph</p> 
	<table bgcolor="green">
	<tr>
	<td>
	<input type="text" value="<?php echo name?>"
	</td></tr>
	<tr>
	<td><?php
echo date("m/d/y"); 
?> 
<tr>
<td>
<?php
$tomorrow = mktime(0, 0, 0, date("m"), date("d")+1, date("y"));
echo "Tomorrow is ".date("m/d/y", $tomorrow); 
?>
</td></tr>


	</td></tr></table></p>
	
</body>

</html>
