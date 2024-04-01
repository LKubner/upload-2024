<?php
// definiu a pasta de destino
$pastadestino = "/uploads/";
var_dump ($_FILES['arquivo']['name']);
// pegamos o nome do arquivo
$nomeArquivo = $_FILES['arquivo']['name'];

//verificar se o arquivo ja existe
if (file_exists(__DIR__ . $pastadestino . $nomeArquivo)){
    echo "arquivo ja existe";
exit;
}

var_dump (__DIR__ . $pastadestino . $nomeArquivo);

//verificar se o dispositivo ja existe
if($_FILES['arquivo']['size'] > 10000000)( //10M
    echo "arquivo muito grande";
    exit;
)


var_dump(strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)));
$extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
if ($extensao != "jpg" and $extensao !="png" and !="gif"){
    echo "Isso nao é uma image";
    exit;


}


?>


