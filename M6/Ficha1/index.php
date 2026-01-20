<?php

// Exercício 1: Manipulação da string $pais
function exercicio1($texto)
{
    // Retornamos um array com as 3 respostas para ser mais fácil exibir
    return array(
        "a" => substr($texto, 3, 2), // 4º e 5º caracter (índice 3, comprimento 2)
        "b" => strlen($texto),       // Comprimento
        "c" => strtoupper($texto)    // Maiúsculas
    );
}

// Exercício 2: Substituição de texto
function exercicio2($frase)
{
    return str_replace("Associação", "Escola", $frase);
}

// Exercício 3: Retornar cor do segundo índice
function exercicio3()
{
    // Definimos o array dentro da função (ou poderia ser passado por argumento)
    $cores = array("Azul", "Verde", "Vermelho", "Amarelo");

    // Segundo índice é o 2 (0, 1, 2...)
    return $cores[2];
}

// Exercício 4: União de Arrays
function exercicio4($arrayA, $arrayB)
{
    // Vamos preparar o output formatado usando print_r e output buffering
    // Isto permite capturar o resultado do print_r numa variável string

    ob_start(); // Inicia gravação do buffer

    echo "<strong>União de \$a + \$b:</strong><br>";
    print_r($arrayA + $arrayB);

    echo "<br><br><strong>União de \$b + \$a:</strong><br>";
    print_r($arrayB + $arrayA);

    $resultado = ob_get_clean(); // Guarda o buffer na variável e limpa

    return "<pre>" . $resultado . "</pre>";
}

// Exercício 5: Gerar Tabela com Números
function exercicio5_TabelaNumerica($jogos)
{
    $html = "<table>";
    $html .= "<tr><th>Jogo</th><th>Cotação</th></tr>";

    foreach ($jogos as $nome => $cotacao) {
        $html .= "<tr>";
        $html .= "<td>{$nome}</td>";
        $html .= "<td>{$cotacao}</td>";
        $html .= "</tr>";
    }

    $html .= "</table>";
    return $html;
}

// Exercício 6: Gerar Tabela com Estrelas
function exercicio6_TabelaEstrelas($jogos)
{
    $html = "<table>";
    $html .= "<tr><th>Jogo</th><th>Cotação</th></tr>";

    foreach ($jogos as $nome => $cotacao) {
        // Lógica das estrelas
        $estrelas = str_repeat("&#9733;", $cotacao);

        $html .= "<tr>";
        $html .= "<td>{$nome}</td>";
        $html .= "<td><span class='estrela'>{$estrelas}</span></td>";
        $html .= "</tr>";
    }

    $html .= "</table>";
    return $html;
}

// --------------------------------------------------------------------------
// DADOS GLOBAIS (Variáveis usadas para passar às funções)
// --------------------------------------------------------------------------
$pais_global = "Portugal";
$frase_global = "Estou a frequentar o curso de PHP na Associação";
$a_global = array("a" => "maçã", "b" => "banana");
$b_global = array("a" => "kiwi", "b" => "ananás", "c" => "morango");
$jogos_global = array(
    "WoW" => 3,
    "GTA" => 4,
    "Doom" => 5,
    "UFO" => 4,
    "Crysis" => 2
);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Ficha 1 - Funções PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .box {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            border-bottom: 2px solid #0073e6;
            color: #333;
            padding-bottom: 5px;
        }

        /* Estilos Tabela */
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 400px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #0073e6;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Estrela */
        .estrela {
            color: gold;
            font-size: 1.5em;
            text-shadow: 1px 1px 1px #999;
        }
    </style>
</head>

<body>

    <h1>Resolução da Ficha de Trabalho Nº 1 (Com Funções)</h1>

    <!-- EXERCÍCIO 1 -->
    <div class="box">
        <h2>Exercício 1</h2>
        <p>Variável: <em><?php echo $pais_global; ?></em></p>
        <?php
        // Chamada da Função
        $res1 = exercicio1($pais_global);
        ?>
        <ul>
            <li>a. Quarto e quinto caracter: <strong><?php echo $res1['a']; ?></strong></li>
            <li>b. Quantidade de caracteres: <strong><?php echo $res1['b']; ?></strong></li>
            <li>c. Maiúsculas: <strong><?php echo $res1['c']; ?></strong></li>
        </ul>
    </div>

    <!-- EXERCÍCIO 2 -->
    <div class="box">
        <h2>Exercício 2</h2>
        <p>Original: <em><?php echo $frase_global; ?></em></p>
        <p>Resultado da função: <strong><?php echo exercicio2($frase_global); ?></strong></p>
    </div>

    <!-- EXERCÍCIO 3 -->
    <div class="box">
        <h2>Exercício 3</h2>
        <p>Cor no segundo índice do array criado na função:
            <strong style="color:red;"><?php echo exercicio3(); ?></strong>
        </p>
    </div>

    <!-- EXERCÍCIO 4 -->
    <div class="box">
        <h2>Exercício 4</h2>
        <?php echo exercicio4($a_global, $b_global); ?>
    </div>

    <!-- EXERCÍCIO 5 -->
    <div class="box">
        <h2>Exercício 5</h2>
        <p>Tabela gerada via função:</p>
        <?php echo exercicio5_TabelaNumerica($jogos_global); ?>
    </div>

    <!-- EXERCÍCIO 6 -->
    <div class="box">
        <h2>Exercício 6</h2>
        <p>Tabela com estrelas gerada via função:</p>
        <?php echo exercicio6_TabelaEstrelas($jogos_global); ?>
    </div>

</body>

</html>