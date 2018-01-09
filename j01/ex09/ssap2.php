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
        else if ($var == "0")
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
function    print_assap($arr)
{
    $i = count($arr);
    echo($arr[0]);
    if ($i > 1)
    {   
        echo("\n");
        $u = 1;
        while($u < $i - 1)
        {
            echo($arr[$u]."\n");
            $u++;
        }
        echo($arr[$u]);
    }
    echo("\n");

}
function    retrieve_numerique($arr)
{
    $arr3 = array();
    foreach($arr as $arr2)
    {
        if (is_numeric($arr2))
            {
                $arr3 = array_merge($arr3, ft_split($arr2));
            }
    }
    sort($arr3, SORT_STRING);
    return $arr3;
}
function    retrieve_alpha($arr)
{
    $arr3 = array();
    foreach($arr as $arr2)
    {
        if (ctype_alpha($arr2))
            {
                $arr3 = array_merge($arr3, ft_split($arr2));
            }
    }
    return $arr3;
}

function    retrieve_nonalpha($arr)
{
    $arr3 = array();
    foreach($arr as $arr2)
    {
        if ((!ctype_alpha($arr2)) && !(is_numeric($arr2)))
            {
                $arr3 = array_merge($arr3, ft_split($arr2));
            }
    }
    return $arr3;
}
    if($argc >= 2)
    {
        $u = 1;
        $arr = array();
        while($u < $argc)
        {
            $arr = array_merge($arr, ft_split($argv[$u]));
            $u++;
        }
        $arr3 = sort($arr, SORT_NATURAL | SORT_FLAG_CASE);
        $arr3 = retrieve_alpha($arr);
        $arr3 = array_merge($arr3, retrieve_numerique($arr));
        $arr3 = array_merge($arr3, retrieve_nonalpha($arr));
        print_assap($arr3);
    }
?>