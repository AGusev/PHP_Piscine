#!/usr/bin/php
<?PHP
function do_args($argv, $argc)
{
	$i = 1;
	while ($i++ < $argc)
		$string .= " ".$argv[$i]." ";
	return ($string);
}
function trim_string($string)
{
	$trimmed = trim($string);
	while ((strpos($trimmed, "  ")) == TRUE)
		$trimmed = str_replace("  ", " ", $trimmed);
	return ($trimmed);
}
function	custom_sort($a, $b)
{
	$a1 = strtolower($a);
	$b1 = strtolower($b);
	$i = 0;
	$comp = "abcdefghijklmnopqrstuvwxyz0123456789!\"'#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		$posa = strpos($comp, $a1[$i]);
		$posb = strpos($comp, $b1[$i]);
		if ($posa < $posb)
			return (-1);
		else if ($posa > $posb)
			return (1);
		else
			$i++;
	}
}
if ($argc > 1)
{
	$string = do_args($argv, $argc);
	$string = trim_string($string);
	$tab = explode(" ", $string);
	usort($tab, "custom_sort");
	foreach ($tab as $value)
		echo ("$value\n");
}
?>