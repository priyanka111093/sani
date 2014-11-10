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
function factorial($number) {
    if ($number < 0) {
        throw new InvalidArgumentException('Number cannot be less than zero');
    }
    $factorial = 1;
    while ($number > 0) {
        $factorial *= $number;
        $number --;
    }
    return $factorial;
}
print factorial(5);
?>
</body>

</html>
