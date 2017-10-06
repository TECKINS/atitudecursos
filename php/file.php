<?php 
   $destino = '../images/' . $_FILES['arquivo']['name'];
 
   $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

   move_uploaded_file( $arquivo_tmp, $destino  );

   echo "Arquivo enviado com sucesso!";
?>
<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="file.php">
   Selecione uma imagem: <input name="arquivo" type="file" />
   <br />
   <input type="submit" value="Salvar" />
</form>

</body>
</html>
