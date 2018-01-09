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
function    print_assap($arr)
{
    $i = count($arr);
    echo($arr[0]);
    if ($i > 1)
    {   
        echo(" ");
        $u = 1;
        while($u < $i - 1)
        {
            echo($arr[$u]." ");
            $u++;
        }
        echo($arr[$u]);
    }
    echo("\n");

}
    if($argc >= 2)
    {
        $arr = ft_split($argv[1]);
        
        $u = count($arr);
        if($u > 1)
        {
            $i = 1;
            while($i < $u)
            {
                $tmp1 = $arr[$i]; 
                $arr[$i] = $arr[$i-1];
                $arr[$i-1] = $tmp1;
                $i++;
            }
        }
        print_assap($arr);
    }
?>