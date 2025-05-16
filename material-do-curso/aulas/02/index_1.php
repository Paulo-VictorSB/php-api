<?php

/*
Existem duas funções fundamentais no PHP para tratar JSON.
Uma para criar dados em formato JSON.
Outra para transformar dados de formato JSON para coleções de dados do PHP (arrays)
Neste vídeo vamos falar sobre json_encode
*/

// Tranformar arrays em JSON

$dados = [
    'joao',
    'ana',
    'carlos',
    'joaquim',
    'cristina'
];
echo '<pre>';

// json_encode transforma um array numa string JSON
echo json_encode($dados);

echo '<hr>';

// o segundo argumento é uma constante. Neste caso, JSON_PRETTY_PRINT vai tornar o JSON mais fácil de ler
// para os humanos. Para as linguagens de programação, é indiferente.
echo json_encode($dados, JSON_PRETTY_PRINT);

// vejamos agora um array que tem palavras acentuadas
$dados = [
    'João',
    'Conceição',
    'André'
];

// os dados vão aparecer com caracteres unicode
echo '<hr>';
echo json_encode($dados, JSON_PRETTY_PRINT);

// vamos apresentar os dados corretamente
echo '<hr>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE);

// e se quisermos os dados apresentados corretamente (sem ser em unicode)
// e também com o formato pretty print, podemos separar as constantes com uma barra vertical
echo '<hr>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);