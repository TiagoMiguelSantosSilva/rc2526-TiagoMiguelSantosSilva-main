<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
echo "<h1 style=\"color: blue;\">Olá, Mundo!</h1>"; // Exibe a mensagem "Olá, Mundo!" na tela
$a = 10;
$bool = false;
echo "<p>O valor de a é: $a " . gettype($a) . "</p>"; // Exibe o valor da variável $a e seu tipo
echo "<p>O valor booleano é: " . ($bool ? 'true' : 'false') . "</p>"; // Exibe o valor booleano de $bool

if ($a > 5) {
    echo "<p>a é maior que 5</p>"; // Verifica se $a é maior que 5 e exibe a mensagem correspondente
} else {
    echo "<p>a não é maior que 5</p>";
}
$a = 3;
$b = "3";

if ($a == $b) {
    echo "<p>a é igual a b</p>"; // Verifica se $a é igual a $b e exibe a mensagem correspondente
} else {
    echo "<p>a não é igual a b</p>";
}

if ($a === $b) {
    echo "<p>a é idêntico a b</p>"; // Verifica se $a é idêntico a $b e exibe a mensagem correspondente
} else {
    echo "<p>a não é idêntico a b</p>";
}
// Exponencial
$base = 3;
$expoente = 4;
$resultado = $base ** $expoente;
echo "<p>$base elevado a $expoente é igual a $resultado</p>";

$resultado = pow(2, 5); // Calcula 2 elevado a 5 usando a função pow()
echo "<p>2 elevado a 5 é igual a $resultado</p>";

// Raiz quadrada
$numero = 16;
$raizQuadrada = sqrt($numero); // Calcula a raiz quadrada de 16 usando a função sqrt()
echo "<p>A raiz quadrada de $numero é igual a $raizQuadrada</p>";

// resto da divisão
$dividendo = 10;
$divisor = 3;
$resto = $dividendo % $divisor; // Calcula o resto da divisão de 10 por 3 usando o operador %
echo "<p>O resto da divisão de $dividendo por $divisor é igual a $resto</p>";

// valor par o impar
$numero = 7;
if ($numero % 2 == 0) {
    echo "<p>$numero é um número par</p>"; // Verifica se o número é par
} else {
    echo "<p>$numero é um número ímpar</p>"; // Verifica se o número é ímpar
}

// determinar se um número é múltiplo de outro
$num1 = 15;
$num2 = 5;
if ($num1 % $num2 == 0) {
    echo "<p>$num1 é múltiplo de $num2</p>"; // Verifica se $num1 é múltiplo de $num2
} else {
    echo "<p>$num1 não é múltiplo de $num2</p>";
}

$a = 6;
echo $a++ . "<br>"; // Pós-incremento: incrementa $a em 1 após a expressão   
echo $a . "<br>"; // Exibe o valor de $a após o pós-incremento

$b = 7;
echo ++$b . "<br>"; // Pré-incremento: incrementa $b em 1 antes da expressão
echo $b; // Exibe o valor de $b após o pré-incremento

//space ship operator   
$x = 10;
$y = 20;
$resultado = $x <=> $y; // Compara $x e $y
echo "<p>O resultado da comparação entre $x e $y é: $resultado</p>"; // Exibe o resultado da comparação

define("PI", 3.14); // Define uma constante PI com o valor 3.14
echo "<p>O valor de PI é: " . PI . "</p>"; // Exibe o valor da constante PI

// estruturas de controle
$a = rand(1, 10); // Gera um número aleatório entre 1 e 10
if ($a <= 5) {
    echo "<p>O número gerado é menor ou igual a 5: $a</p>"; // Verifica se o número é menor ou igual a 5
} else {
    echo "<p>O número gerado é maior que 5: $a</p>";
}
$diaSemana = date("N"); // Obtém o dia da semana atual (1-7)
switch ($diaSemana) {
    case 1:
        echo "<p>Hoje é Segunda-feira</p>";
        break;
    case 2:
        echo "<p>Hoje é Terça-feira</p>";
        break;
    case 3:
        echo "<p>Hoje é Quarta-feira</p>";
        break;
    case 4:
        echo "<p>Hoje é Quinta-feira</p>";
        break;
    case 5:
        echo "<p>Hoje é Sexta-feira</p>";
        break;
    case 6:
        echo "<p>Hoje é Sábado</p>";
        break;
    case 7:
        echo "<p>Hoje é Domingo</p>";
        break;
    default:
        echo "<p>Dia inválido</p>";
}

// Estrutura de repetição
// For
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        echo "$i "; // Pula o número 5
    }
}
// While
$i = 0;
while ($i != 5) {
    echo "<p>Número gerado: $i</p>"; // Exibe o número gerado
    $i = rand(1, 10); // Gera um número aleatório entre 1 e 10
}

// do while
$i = 0;
do {
    echo "<p>Número gerado no do-while: $i</p>"; // Exibe o número gerado
    $i = rand(1, 10); // Gera um número aleatório entre 1 e 10
} while ($i != 5);


$lista = array("Maçã", "Banana", "Laranja", "Uva"); // Define um array de frutas
foreach ($lista as $fruta) {
    echo "<p>Fruta: $fruta</p>"; // Exibe cada fruta da lista
}

// arrays associativos
$idades = array(
    "João" => 25,
    "Maria" => 30,
    "Pedro" => 20
); // Define um array associativo com nomes e idades
foreach ($idades as $nome => $idade) {
    echo "<p>$nome tem $idade anos</p>"; // Exibe o nome e a idade de cada pessoa
}

// adcionando elementos a um array
$idades["Ana"] = 28; // Adiciona um novo elemento ao array associativo

// procurar um valor em um array
$procurar = "Maria";
if (array_key_exists($procurar, $idades)) {
    echo "<p>$procurar está na lista com idade " . $idades[$procurar] . "</p>"; // Verifica se o nome existe no array
} else {
    echo "<p>$procurar não está na lista</p>";
}

$lista = array(5, 2, 9, 1, 7); // Soma os valores do array

// somar os elementos do array
$soma = array_sum($lista);
echo "<p>A soma dos elementos do array é: $soma</p>";

// o mínimo valor do array
$minimo = min($lista);
echo "<p>O valor mínimo do array é: $minimo</p>";

// o máximo valor do array
$maximo = max($lista);
echo "<p>O valor máximo do array é: $maximo</p>";

// eliminar elementos de um array a partir de um índice
array_splice($lista, 2); // Remove elementos a partir do índice 2
echo "<p>Array após eliminar elementos a partir do índice 2: ";
print_r($lista);
echo "</p>";

// índice aleatório do array
$indiceAleatorio = array_rand($lista);
echo "<p>Índice aleatório do array: $indiceAleatorio, Valor: " . $lista[$indiceAleatorio] . "</p>";

// strings
$str = "  Olá, Mundo!  ";
echo "<p>$str</p>";

// contar o número de caracteres de uma string
$length = strlen($str);
echo "<p>Número de caracteres na string: $length</p>";

// converter para maiúsculas
$upper = strtoupper($str);
echo "<p>String em maiúsculas: $upper</p>";
$maiusculas = mb_strtoupper($str);
echo "<p>String em maiúsculas (mb): $maiusculas</p>";

// converter para minúsculas
$lower = strtolower($str);
echo "<p>String em minúsculas: $lower</p>";

// comparar strings
$str1 = "Olá";
$str2 = "Olá";
if (strcmp($str1, $str2) == 0) {
    echo "<p>As strings são iguais</p>";
} else {
    echo "<p>As strings são diferentes</p>";
}

// separar string num array
$frase = "Esta é uma frase de exemplo";
$palavras = explode(" ", $frase);
echo "<p>Palavras na frase:</p>";
foreach ($palavras as $palavra) {
    echo "<p>$palavra</p>";
}

// juntar array em string
$palyt65avras = array("Esta", "é", "outra", "frase");
$novaString = implode(" ", $palavras);
echo "<p>Frase formada: $novaString</p>";

// substituir parte da string
$texto = "O céu é azul";
$novoTexto = str_replace("azul", "cinza", $texto);
echo "<p>Texto após substituição: $novoTexto</p>";

// inspeção de variáveis
$var = array("PHP", 2, true);
var_dump($var);
echo "<br>";
print_r($var);
echo "<br>";
var_export($var);
echo "<br>";
?>

<body>

</body>

</html>