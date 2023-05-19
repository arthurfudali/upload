<?php

$file = $_GET["deletarArquivo"];
$dir = "arquivos/";

/* Excluir do diretório */
unlink($dir . $file);
/* Excluir do DataBase */
mysqli_query($conexao, "DELETE from img where img_name_random = $file");

echo "Arquivo apagado!";
header("location:arquivo.php");

?>