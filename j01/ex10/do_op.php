#!/usr/bin/php
<?PHP

function ft_split($str)
{
	   $r = explode(' ', $str);
		$str1 = array();
		$u = 0;
	foreach($r as $var)
	{
		if (empty($var))
		{
			if
			($var == "0")
			{
				$str1[$u] = "0";
				$u++;
			}
		}
		else 
		{
			$str1[$u] = $var;
			$u++;
		}
	}
		return ($str1);
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

	if($argc == 4)
	{
		$u = 1;
		$arr = ft_split($argv[$u]);
		$u++;
		
		while($u < $argc)
		{
			$arr = array_merge($arr, ft_split($argv[$u]));
			$u++;
		}
		if (is_numeric($arr[0]) && is_numeric($arr[2]))
		{
			if ((!ctype_alpha($arr[1])) && !(is_numeric($arr[1])))
				if($arr[1] == '/' || $arr[1] == '*' 
				|| $arr[1] == '-' || $arr[1] == '+' 
				|| $arr[1] == '%')
				{	
					if ($arr[1] == '/')
						$d = intval($arr[0]) / intval($arr[2]);
					if ($arr[1] == '*')
						$d = intval($arr[0]) * intval($arr[2]);
					if ($arr[1] == '+')
						$d = intval($arr[0]) + intval($arr[2]);
					if ($arr[1] == '-')
						$d = intval($arr[0]) - intval($arr[2]);
					if ($arr[1] == '%')
						$d = intval($arr[0]) % intval($arr[2]);
					
					printf("%d\n", $d);
					
				}
				else
				{
					printf("Incorrect Parameters\n");
					return 0;
				}
			else
			{
				printf("Incorrect Parameters\n");
				return 0;
			}
			
		}
		else
		{
			printf("Incorrect Parameters\n");
			return 0;
		}
	}
	else
	{
		printf("Incorrect Parameters\n");
		return 0;
	}
?>