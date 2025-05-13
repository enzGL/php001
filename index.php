<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 001 de PHP</h1>
    <hr>
    <?php
    echo "<h2>Varíavel</h2>";
    $nome = "Nome: " . "Enzo Lanzi" . "<br>";
    $idade = "Idade: " . 17 . "<br>";
    $fumante = false;
    echo $nome;
    echo $idade;
    echo "Fumante: ";
    
    if($fumante == true){
        echo "Sim";
    }else{
        echo "Não";
    }   
    ?>
</body>
</html>