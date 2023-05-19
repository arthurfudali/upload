<?php

$file = $_GET["deletarArquivo"];
$dir = "arquivos/";

/* Excluir do diretório */
unlink($dir . $file);
/* Excluir do DataBase */
mysqli_query($conexao, "DELETE from imagens where nome_randomico_imagem = $file");

echo "Arquivo apagado!";
header("location:arquivo.php");

?>
