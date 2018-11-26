<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux -->
<body>
<?php
$num1 = rand(1, 20);
$num2 = rand(1, 20);
  function number($num1, $num2){
    if ($num1 > $num2)
    {
      return 'Le premier nombre ' . $num1 . ' est plus grand que le deuxième nombre ' . $num2;
    }
    elseif ($num1 < $num2)
    {
      return 'Le premier nombre ' . $num1 . ' est plus petit que le deuxième nombre ' . $num2;
    }
    else
    {
      return 'Les deux nombres ' .$num1 . ' et ' . $num2 . ' sont identiques';
    }
  }
  echo number($num1, $num2);
  ?>
</body>
</html>


<!-- OPTION DE CORRECTION NUMERO 2 -->
<!-- // $number1 = rand(1,10);
// $number2 = rand(1,10);
// function nombre($number1, $number2){ -->
   <!-- //return permet de retourner ma fonction avec le contenu souhaité
  // break obligatoire pour passer d'une condition à l'autre
  // switch(true){
  // case  $number1 > $number2:
  // return 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
  // break;
  // case  $number1 < $number2:
  // return 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
  // break;
  // case  $number1 == $number2:
  // return 'Les deux nombres sont identiques si les deux nombres sont égaux';
  // break;
  //default très important à mettre s'il faut mettre une valeur par défault si les autres
 // conditions ne répondent à ce que l'on souhaite
 //  default :
 //  return 'lol';
 //  }
 //  }
 //  echo nombre($number1, $number2); -->
