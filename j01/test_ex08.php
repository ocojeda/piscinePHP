#!/usr/bin/php
<?PHP
include ("ex08/ft_is_sort.php");
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
        else if
            ($var == "0")
        {
            $str1[$u] = "0";
            $u++;
        }
    }
        return ($str1);
    }
    $r = explode(' ', $str);
    return ($r);
}
    if($argc >= 2)
    {
        $u = 1;
        $arr = ft_split($argv[$u]);
        $u++;
        while($u < $argc)
        {
            $arr = array_merge($arr, ft_split($argv[$u]));
            $u++;
        }
        if (ft_is_sort($arr))
        echo "Le tableau est trie\n";
        else
        echo "Le tableau n’est pas trie\n";
        print_r($arr);
    }
?>