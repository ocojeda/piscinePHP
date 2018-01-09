#!/usr/bin/php
<?PHP
date_default_timezone_set('Europe/paris');
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
	preg_match("(^[L|l]undi|^[M|m]ardi|^[M|m]ercredi|^[J|j]eudi|^[V|v]endredi|^[S|s]amedi|^[D|d]imanche)", $tab[0], $matches);
	if (count($matches) != 1)
		return 1;
	if (preg_match("/^[0-3][0-9]$/", $tab[1]) === 0)
		return 1;
	if	($tab[1] > 31 && $tab[1] < 40)
		return 1;
	if (preg_match("/^[0-9]{4}$/", $tab[3]) === 0)
		return 1;
	if (preg_match("/^[0-9]{2}$/", $tab[4]) === 0)
		return 1;
	if (preg_match("/^[0-9]{2}$/", $tab[5]) === 0)
		return 1;
	if (preg_match("/^[0-9]{2}$/", $tab[6]) === 0)
		return 1;
	return 0;
}

function month_getter($s1)
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
        $arr[2] = month_getter($arr[2]);
		if(check_date($arr))
		{
			echo("Wrong Format"."\n");
			exit();
		}
        echo mktime($arr[4], $arr[5], $arr[6], $arr[2], $arr[1], $arr[3])."\n";
	}
	else
		echo("Wrong Format"."\n");
?>