<?php

// atividade: 1. subir apenas arquivos.png 2. dar nomes aleatorios a todos os arquivos 


//pathinfo --> PATHINFO_EXTENSION
//md5() nao funciona sozinho pois uma palavra sempre tera a mesma cripto
//uniqid() 
$diretorio = "arquivos/"; /* onde vai cair os arquivos */ /* barra 1 */
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE; /* operador TERNARIO UUUUUUUUUUUUUUUUUUUUUUUUUUUU */ /* isset -> serve pra ver se a variavel existe */ 
if(pathinfo(['arquivo'],PATHINFO_EXTENSION) == '.png'){

for ($k = 0; $k < count($arquivo['name']); $k++){ /* o count conta quantos arquivos existem, com isso ele conta a quatidade com k<quantidade */
	
	$destino = $diretorio."/".$arquivo['name'][$k]; /* para onde o arquivo vai */   /* barra 2 */
	/* arquivo//copo.png -> ele usa duas barras  */

	if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)){
		echo "Arquivo enviado com sucesso!";
	} else {
		echo "Falha ao enviar o arquivo";
	}
}
}
else{
	echo 'aceitamos apenas arquivos .png';
}
?>