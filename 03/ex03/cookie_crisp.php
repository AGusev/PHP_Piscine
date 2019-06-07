#!/usr/bin/php
<?php
if ($_GET)
{
    if ($_GET['action'] == 'set')
        setcookie ($_GET['name'], $_GET['vallue'], time() + (3600 * 24 * 13));
    if ($_GET['action'] == 'del')
        setcookie ($_GET['name'], '', time() -3600);
    if ($_GET['action'] == 'read')
    {
        if(isset ($GET['name']) != NULL)
            echo $_COOKIE[$_GET['name']].'\n';
        else
            echo 'User is not set';
    }
}
?>
