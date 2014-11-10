<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	<?php
	
	function prime($i)
	{
	for($x=($i-1);$x>1;$x--)
	{
		if(($i%$x)==0)
		{
			return "composite";
		}
	}
	return "prime";
}
echo '<table border="1" cellpadding="3">';
for($i=1; $i<=10; ++$i)
{
echo '<tr><td>' . $i . '</td><td>' . (($i % 2 === 0)? 'Even' : 'Odd') . '</td><td>' . prime($i). '</td></tr>';
}


echo '</table>';

?>

</body>

</html>
