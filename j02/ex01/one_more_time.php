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
    if($i != 7)
        return 1; 
    if($tab[2] == 0)
        return 1;
    return 0;
}

function get_number($s1)
{
	if ($s1 == "janvier" || $s1 == "Janvier")
		return (1);
	if ($s1 == "fevrier" || $s1 == "Fevrier" || $s1 == "Février" || $s1 == "février")
		return (2);
	if ($s1 == "mars" || $s1 == "Mars")
		return (3);
	if ($s1 == "avril" || $s1 == "Avril")
		return (4);
	if ($s1 == "mai" || $s1 == "Mai")
		return (5);
	if ($s1 == "Juin" || $s1 == "juin")
		return (6);
	if ($s1 == "juillet" || $s1 == "Juillet")
		return (7);
	if ($s1 == "Aout" || $s1 == "aout" || $s1 == "Août" || $s1 == "août")
		return (8);
	if ($s1 == "septembre" || $s1 == "Septembre")
		return (9);
	if ($s1 == "octobre" || $s1 == "Octobre")
		return (10);
	if ($s1 == "novembre" || $s1 == "Novembre")
		return (11);
	if ($s1 == "decembre" || $s1 == "Décembre" || $s1 == "Decembre" || $s1 =="décembre")
        return (12);
    return 0;
}

if($argc == 2)
    {
        $arr = ft_split($argv[1]);
        $arr[2] = get_number($arr[2]);
        if(check_date($arr))
            echo("Wrong Format"."\n");
        
        print_r($arr);
    }
?>