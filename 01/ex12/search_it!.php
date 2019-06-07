#!/usr/bin/php
<?php
	if ($argc <= 1)
		return 0;
	foreach ($argv as $elem)
	{
		if ($elem == $argv[0] || $elem == $argv[1])
            	continue ;
		else
		{
			$val = explode(':', $elem);
			if ($val[0] == $argv[1])
				$result = $val[1];
		}
	}
	echo $result;
	if (is_null($result) == FALSE)
		echo "\n";
?>