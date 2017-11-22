#!/usr/bin/php
<?PHP

function    ft_is_sort($tab)
{
    $tab2 = $tab;
    sort($tab);
    if ($tab2 == $tab)
        return 1;
    return 0;
}
?>