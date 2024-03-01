<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
</head>
<body>
    <?php
        echo "<h3>OPERADORES MATEMÁTICOS EM PHP</h3>";
        $numero1 = 32;
        $numero2 = 87;
        $numero3 = 23;
        $numero4 = 69;
        echo "Número 1: " .$numero1;
        echo "<br>Número 2: " .$numero2;
        echo "<br>Número 3: " .$numero3;
        echo "<br>Número 4: " .$numero4;

        $soma = $numero1 + $numero3;
        echo "<br>Soma total: " .$soma;
        $soma = $numero2 - $numero4;
        echo "<br>Subtração total: " .$soma;
        $soma = $numero2 / $numero1;
        echo "<br>Divisão total: " .$soma;
        $soma = $numero3 * $numero4;
        echo "<br>Multiplicação total: " .$soma;
    ?>
</body>
</html>