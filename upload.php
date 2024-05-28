<?php
// definiu a pasta de destino
$pastadestino = "/uploads/";
var_dump($_POST);
//imprimir o tamanho do arquivo
var_dump ($_FILES['arquivo']['size']);
 //pegamos o nome do arquivo
$nomeArquivo = $_FILES['arquivo']['name'];

//verificar se o arquivo ja existe
if (file_exists(__DIR__ . $pastadestino . $nomeArquivo)){
    echo "arquivo ja existe";
exit;
}

var_dump (__DIR__ . $pastadestino . $nomeArquivo);

//verificar se o tamanho esperarado é maior que 10mb
if($_FILES['arquivo']['size'] > 10000000){ //10M
    echo "arquivo muito grande";
    exit;
}
//verificar se o arquivo é uma imagem
$extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
var_dump($_FILES['arquivo'['name']]);
var_dump(pathinfo($_FILES['arquivo']['name'], PATHINFO_FILENAME));

if ($extensao != "jpg" && $extensao !="png" && !="gif"){
    echo "Isso nao é uma imagem";
    exit;


}


?>


