#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$trimmed = trim($argv[1]);
	while (strpos($trimmed, " "))
		$trimmed = str_replace(" ", " ", $trimmed);
	echo("$trimmed\n");
}
?>