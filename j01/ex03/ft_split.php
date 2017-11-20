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
    //not sure what to return when argv1=numeric
    return $str;
}
?>