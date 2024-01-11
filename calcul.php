<?php  
$n1=$_POST['num1'] ;
$n2=$_POST['num2'] ;

function addition($arg1,$arg2){
    $res = $arg1+$arg2;
    return $res;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul sum</title>
</head>
<body>

    <h1>Le resultat de la somme de  <?php echo $n1 . '+' . $n2 .' est :' . addition($n1,$n2).' ' ?> </h1>
    

</body>
</html>
