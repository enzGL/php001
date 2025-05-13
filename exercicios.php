<?php
echo "PÊ AGÁ PÊ";
?>
<br>
5+2= <?php echo 5+2 ?> <br>
10-2= <?php echo 10-2 ?> <br>
10/2= <?php echo 10/2 ?> <br>
10*2= <?php echo 10*2 ?> <br>
10%2= <?php echo 10%2 ?> <br>
10**2= <?php echo 10**2 ?> <br>

<?php
$salario = 5000.35;
$idade = 17;
$sobrenome = "Lanzi";
$animalEstimacao = true;

echo "<br>";
echo "Eu tenho $idade <br>";
echo 'Eu tenho $idade anos <br>';
echo "Eu tenho" . $idade . " anos <br>";
echo 'Eu tenho' . $idade . ' anos <br>';

echo "<br>";

if($idade >= 21){
    echo "Pode jogar no tigre👍";
}else{
    echo "Não pode jogar👎";
}

//uma linha
 
/*
varias linhas
*/
 
echo "<br>";
$corFavorita = "azul";
 
switch ($corFavorita) {
    case 'azul':
        echo "<br>Sua cor favorita é azul";
        break;
    case 'vermelho':
        echo "<br>Sua cor favorita é vermelho";
        break;
    case 'amarelo':
        echo "<br>Sua cor favorita é amarelo";
        break;
    default:
        echo "<br>Não sei sua cor favorita";
        break;
}
 
$i = 0;
while($i<10){
    echo "<br>Vambora";
    $i = $i + 1;
}

for($i = 0; $i < 10; $i=$i+1){
    echo "<br>Vambora 2";
}

?>
