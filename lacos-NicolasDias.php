<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
       
    </style>
    <title>Document</title>
</head>
<body>


    <?php
   $listaordenada = [ 
        [
    'nome' => 'Nicolas',
    'id' => 1,2,3,4,
    'idade' => 19
    ],
    [
    'nome'=> 'Sarinha',
    'id' => 561,
    'idade' => 16
    ],
    [
    'nome' => 'Gabriel CANGUSSU',
    'id' => 355,
    'idade' => 17
    ],
];

   echo '<br>';
   echo '<pre>';
   print_r ($listaordenada);
   echo '</pre>';
   echo '<br>';
    echo 'Lista ordenada de acordo a idade';
   uasort($listaordenada, function ($a,$b){
        if ($a['idade'] == $b['idade']) return 0;
        return $a['idade'] < $b['idade'] ? -1 : 1;
    });
    echo '<pre>';
    print_r ($listaordenada);
    echo '</pre>';  
    echo 'Segunda forma de imprimir com o foreach';
    echo '<br>';
    foreach($listaordenada as $key => $value){
    echo $key;
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    echo '<br>';
    foreach($listaordenada as $chave => $valor){
    foreach($valor as $Nchave => $Nvalor){
    echo $Nchave;
    echo "<pre>";
    print_r($Nvalor);
    echo "</pre>";
    echo '<br>';
    }}
    ?>
    

</body>
</html>