<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="upload" enctype="multipart/form-data" method="post" action="upload.php"> <!-- enctype e extremamente necessario nesse codigo, sem isso ele nao funciona -->
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">  <!-- tamanho maximo de arquivo suportado -->
        <input type="file" name="arquivo[]" multiple="multiple" /> <!-- multiple="multiple" permite selecionar varios arquivos --> <!-- o [] no 'arquivo[]' serve para dar codigos a cada arquivo individualmente -->
        <input name="enviar" type="submit" value="Enviar"> 
</form>
    
</body>
</html>