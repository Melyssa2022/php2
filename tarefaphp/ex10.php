<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisões</title>
</head>
<body>
    <h1>Exemplo 10</h1>
    <?php


echo "<br><br>";
$dia = 7;
switch ($dia){
    case '1':
        echo "Domingo";
        break;
    case '2':
        echo "Segunda-Feira";
        break;
    case '3':
        echo "Terça-feira";
        break;
    case '4':
        echo "Quarta-feira";
        break;
    case '5':
        echo "Qunta-feira";
        break;
    case '6':
        echo "Sexta-feira";
        break;
    case '7':
        echo "Sabádo";
        break;
    default:
        echo "Dia Inválido";
        break;
}





?>
</body>
</html>