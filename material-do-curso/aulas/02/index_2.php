<?php

/*
Podemos também ter dados em formato de array associativo e que podem ser facilmente
interpretados pelo JavaScript
*/

$dados = [
    'administrador' => 'João Ribeiro',
    'secretaria' => 'Carla Santos',
    'diretor_geral' => 'Márcio Silva',
    'oficial_de_contas' => 'Fernanda Correia'
];

echo '<pre>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>

<script>
    let dados = JSON.parse('<?= json_encode($dados, JSON_UNESCAPED_UNICODE) ?>');
    console.log(dados);

    // apresentação dos dados como um objeto
    console.table(dados)

    // apresentação dos dados como propriedades individuais
    console.log(dados.administrador)
    console.log(dados.secretaria)
    console.log(dados.diretor_geral)
    console.log(dados.oficial_de_contas)
</script>