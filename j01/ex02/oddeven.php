#!/usr/bin/php
<?PHP
print("Entrez un nombre: ");
while($i = fgets(STDIN))
{
    $d = intval($i);
    if(is_numeric($i))
    {
        if($d % 2 == 0)
            printf("Le chiffre %d est Pair\n", $d);
        else
            printf("Le chiffre %d est Impair\n", $d);
    }
    else 
        printf("'%s' n'est pas un chiffre\n", $i);
    print("Entrez un nombre: ");
}

?>