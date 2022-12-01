<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <?php
$nome = "Melyssa";
$idade = "17";
$fumante = false;
// false = Falso - 0 /   True  = verdadeiro - 1
echo "<p>ID do cliente: $nome <br>";
echo "Idade do cliente: $idade <br>";
echo "Fumante: $fumante </p>";

/* OPERADORES ARITMÉTICOS */

echo 20*3;
echo "<br>";

// OPERADORES RELACIONAIS

echo 20>10;
echo "<br>";

// ESTRUTURA DE DECISÃO

// UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
// SE FOR FUMANTE NÃO PODE ENTRAR
// IDADE NÃO PODE SER < 13 ANOS
// IF SIMPLES

echo "<br><br>";
$idade = 75;
$fumante = true;
// if = SE
if($idade > 75 || $fumante == true || $idade <= 13){
    echo "PROIBIDA A ENTRADA ACIMA DE 75 ANOS NA FESTA. PROIBIDO FUMANTES. PROIBIDO MENORES DE 13 ANOS";
}else{
    echo "Pode entrar, Seja bem Vindo";
}


// UM ALUNO, SE TIRAR UMA NOTA ACIMA DE 8 ELE É APROVADO
//SE TIRAR UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
//SE ELE TIRAR ABAIXO DE 5 ESTARA REPROVADO

// IF COMPOSTO - TERÁ MAIS DE 2 RESPOSTAS DIFERENTES
echo "<br><br>";
$nota = 10;
if($nota >= 8){
    echo "Aprovado(a)";
}else if($nota >= 5){
    echo "Recuperação";
}else{
    echo "Reprovado(a)";
}


// VCS IRÃO NO SENAC SOMENTE SE:
// ESTIVER UNIFORMIZADO
// CHEOU NO HORARIO
// MENSAGEM: verdadeiro -------Parabéns, você pode ir!!
//           falso --------- Ferrou, você vai ficar na sala do valdeir!!


// ternário
echo "<br><br>";
$uniforme = true;
$chegada = true;
echo ($uniforme == true && $chegada == true) ? "Parabéns, você pode ir!!" : "Ferrou, você vai ficar na sala do valdeir!!";



// SUA COR FAVORITA PODE SER: VERMELHO, AZUL, VERDE
// SWTICH  caso - ESCOLHER UMA DAS OPÇÕES
echo "<br>";
$cor = "verde";
switch ($cor) {
    case 'azul':
        echo "<br>";
        echo "sua cor favorita é $cor";
        break;
    case 'verde':
        echo "<br>";
        echo "sua cor favorita é $cor";
        break;
    case 'vermelho':
        echo "<br>";
        echo "sua cor favorita é $cor";
        break;
    default:
        echo "<br>";
        echo "Sua cor favorita não é azul, verde ou vermelho";
        break;
}


// dias da semana ------ 1 domingo, 2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta e 7 sabado

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



/* escolha um presente para o professor em seu aniversario:
 1 - pote de sorvete
 2 - mouse quebrado
 3 - celular da biqueira funcionado desbloqueado
 4 - fone usado
 5 - mouse pad rasgado
 6 - 1 kg feijão
 7 - um vale Burger King
*/


echo "<br><br>";
$presente = 7;
switch ($presente){
    case '1':
        echo "pote de sorvete";
        break;
    case '2':
        echo "mouse quebrado";
        break;
    case '3':
        echo "celular da biqueira funcionado desbloqueado";
        break;
    case '4':
        echo "fone usado";
        break;
    case '5':
        echo "mouse pad rasgado";
        break;
    case '6':
        echo "1 kg feijão";
        break;
    case '7':
        echo "um vale Burger King";
        break;
    default:
        echo "Presente não listado";
        break;
}

















?>
</body>
</html>