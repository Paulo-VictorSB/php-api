<?php

/*
Se o array não for associativo, a coleção é interpretada pelo JavaScript
como um array numérico
*/

$dados = [
    'João Ribeiro',
    'Carla Santos',
    'Márcio Silva',
    'Fernanda Correia'
];

echo '<pre>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>

<script>
    let dados = JSON.parse('<?= json_encode($dados, JSON_UNESCAPED_UNICODE) ?>');
    console.log(dados);

    // apresentação dos dados como um objeto
    console.table(dados)

</script>