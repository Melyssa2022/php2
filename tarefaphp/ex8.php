<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desisões</title>
</head>
<body>
    <h1>Exemplo 8</h1>
<?php


 //Faça um Programa que leia três números e mostre o maior deles.


$valor1 = 150;
$valor2 = 200;
$valor3 = 300;
if($valor1 > $valor2 && $valor1 > $valor3){
echo "O maior valor é 150";
}else if(($valor2 > $valor1 && $valor2 > $valor3)) {
echo "O maior valor é 200";
}else{
echo "O maior valor é 300";    
}



?>
</body>
</html>