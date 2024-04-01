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



//verificar se o dispositivo ja existe
file_exists(__DIR__ . $pastadestino . $nomeArquivo);

?>


