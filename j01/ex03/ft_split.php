#!/usr/bin/php
<?PHP

function ft_split($str)
{
    
    $i = 0;
    $r = explode(' ', $str);
    if(!(is_numeric($str)))
    {
        $e = count($r);
        $str1 = array();
        $u = 0;
    while ($i < $e)
    {
        if (!empty($r[$i]))
        {
            $str1[$u] = $r[$i];
            $u++;
        }
        $i++;
    }
        unset($r);
        return ($str1);
    }
    return ($str);
}
?>