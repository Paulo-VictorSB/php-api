<?php

/*
O JSON não está limitado a coleções simples.
Podem ser coleçóes de dados bastante complexas. 
*/
$dados['status'] = 'success';
$dados['result'] = true;

$dados['pessoas'] = ['joao', 'ana', 'carlos', 'fernando', 'francisco', 'silvia'];

$dados['cidades'] = ['lisboa', 'porto', 'coimbra', 'faro'];

$dados['linguas'] = [
    'pt' => 'português',
    'en' => 'inglês',
    'fr' => 'francês',
    'de' => 'alemão',
    'es' => 'espahol'
];

$dados['tabuada'] = [];
for($a = 1; $a <=5; $a++){
    for($b = 1; $b <=5; $b++){
        $dados['tabuada'][$a.'x'.$b] = $a * $b;
    }
}

echo '<pre>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// e pode conter arrays multidimensionais sem qualquer problema.