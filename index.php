<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores-Logicos - PHP</title>
        <style>
            body{
                background-color: aqua;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h3>Operadores-Logicos</h3>

        <?php

            $nome = "filipe";
            $idade = 30;

            if($nome == "filipe" && $idade == 32){
                echo("Condicao verdadeira");
            } else{
                echo("Condicao Falsa");
            };

            echo("<hr>");

            $cor_carro = "red";
            $portas_carro = 2;

            if($cor_carro == "blue" || $portas_carro == 2){
                echo("Condicao verdadeira2");
            }else{
                echo("Condicao Falsa2");
            }

            echo("<hr>");

            $idade2 = 18;
            $cnh = true;

            if($idade2 >= 18 && $cnh = true){
                echo("Pode dirigir");
            }else{
                echo("Nao pode dirigir");
            }



        ?>
        
    </body>

</html>