#!/usr/bin/php
<?php
        $i = 0;
        
        while ($i++ < count($argv)) 
        { 
            $j = $i;
            echo ("$argv[$i]");
            if ($j++ != count($argv))
                echo "\n";
		}
?>