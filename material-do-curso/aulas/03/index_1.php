<?php

/*
A função json_encode permite criar a string em formato JSON.
a função json_decode permite a operação contrária: partindo de um JSON,
transformar numa coleção que seja operável com PHP.
*/

$json = '["João","Ana","Carlos","Martins","Cristina"]';
$nomes = json_decode($json);

echo '<pre>';
print_r($nomes);

// neste caso, temos um array de índices numéricos
// se o JSON contém uma estrutura de pares chave valor, podemos
// transformar o JSON num formato de array associativo

$json = '{ "administrador": "João Ribeiro", "secretaria": "Cristina Santos", "oficial_de_contas": "Carlos Oliveira", "colaboradores": { "chefe": "António Daniel", "coordenador_1": "Carlos", "coordenador_2": "Marta", "coordenador_3": "Marisa", "coordenador_4": "Francisco" } }';
$dados_empresa = json_decode($json, true);
print_r($dados_empresa);

// neste caso, transformámos o JSON num array associativo.
// para chegar aos valores deveremos fazer da seguinte forma:

echo $dados_empresa['administrador'];
echo '<br>';
echo $dados_empresa['secretaria'];
echo '<br>';
echo $dados_empresa['colaboradores']['chefe'];
echo '<br>';
echo $dados_empresa['colaboradores']['coordenador_2'];
