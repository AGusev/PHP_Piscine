#!/usr/bin/php
<?php
if ($argc != 4)
{
  echo "Error : Try again\n";
  return (0);
}
foreach ($argv as $elem) {
  $elem = trim($elem);
}
if ($argv[2] == "+")
  echo ($argv[1] + $argv[3]);
else if ($argv[2] == "-")
  echo ($argv[1] - $argv[3]);
else if ($argv[2] == "*")
  echo ($argv[1] * $argv[3]);
else if ($argv[2] == "/")
  echo ($argv[1] / $argv[3]);
else if ($argv[2] == "%")
  echo ($argv[1] % $argv[3]);
echo "\n";
?>