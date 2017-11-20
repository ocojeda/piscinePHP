#!/usr/bin/php
<?PHP

    if($argc >= 2)
    {
        foreach($argv as $var)
        {

            if($var == $argv[0])
            {

            }
            else
            {
                echo("$var");
                echo "\n";
            }
        }
    }
?>