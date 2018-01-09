#!/usr/bin/php
<?PHP

    if($argc >= 2)
    {
        $i = 1;
        while($i < $argc)
        {
            echo("$argv[$i]");
            echo "\n";
            $i++;
        }
    }
?>