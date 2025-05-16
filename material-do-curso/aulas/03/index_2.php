<?php

/*
Se fizermos o decode do JSON sem expressar que queremos um array associativo,
e se o JSON contém informação do tipo chave valor, então o PHP vai converter
diretamente para uma standard class. Neste caso, passa a ser um standard object.
*/
$json = '{ "administrador": "João Ribeiro", "secretaria": "Cristina Santos", "oficial_de_contas": "Carlos Oliveira", "colaboradores": { "chefe": "António Daniel", "coordenador_1": "Carlos", "coordenador_2": "Marta", "coordenador_3": "Marisa", "coordenador_4": "Francisco" } }';
$dados_empresa = json_decode($json);

echo '<pre>';
print_r($dados_empresa);

// para ter acesso aos dados convertidos do JSON, neste caso usamos:

echo '<br>';
echo $dados_empresa->administrador;
echo '<br>';
echo $dados_empresa->oficial_de_contas;
echo '<br>';
echo $dados_empresa->colaboradores->chefe;
echo '<br>';
echo $dados_empresa->colaboradores->coordenador_1;