<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operador string - PHP</title>
    <style>
        body{
            background-color: aqua;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Operador string</h3>
    <?php

    //Operador de concatenacao
    $texto_a = "Olá ";
    $texto_b = "Mundo!";
    $texto_c = $texto_a . $texto_b;

    echo ($texto_c); 

    // a .= b'; é o mesmo que a = a . (+) b;  operador de incremento + concatenacao;
    $texto_c .= $texto_b;
    echo("<br> " . $texto_c);

    $texto_c .= "mais alguma coisa";  //$texto_c = $texto_c . "mais alguma coisa";
    echo("<br>" . $texto_c);


    ?>
    
</body>
</html>