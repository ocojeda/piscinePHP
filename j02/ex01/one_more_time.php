#!/usr/bin/php
<?PHP

function ft_split($str)
{
    $r = explode(' ', trim(preg_replace('/[" "":"]/', ' ', $str))); 
    return ($r);
}
function  check_date($tab)
{
    $i = count($tab);
    echo $i;
    if($i != 7)
        return 1;
    return 0;
}
    if($argc == 2)
    {
        $arr = ft_split($argv[1]);
        if(check_date($arr))
            echo("Wrong Format"."\n");
        print_r($arr);
    }
?>