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
        sort($arr);
        print_assap($arr);
    }
?>