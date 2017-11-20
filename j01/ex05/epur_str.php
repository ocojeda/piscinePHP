#!/usr/bin/php
<?PHP
function ft_split($str)
{
    if(!(is_numeric($str)))
    {
        $r = explode(' ', $str);
        $str1 = array();
        $u = 0;
    foreach($r as $var)
    {
        if (!empty($var))
        {
            $str1[$u] = $var;
            $u++;
        }
    }
        return ($str1);
    }
    $r = explode(' ', $str);
    return ($r);
}
    if($argc == 2)
    {
        $arr = ft_split($argv[1]);
        $i = count($arr);
        echo($arr[0]);
        if ($i > 1)
        {   
            echo(" ");
            $u = 1;
            while($u < $i - 1)
            {
                echo($arr[$u].' ');
                $u++;
            }
            echo($arr[$u]);
        }
        echo("\n");
    }
?>