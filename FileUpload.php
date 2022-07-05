<html>
	<title>File Upload</title>
	<head>File Upload</head>
	<body>
		<form action="#" method="post" enctype="multipart/form-data">
			<label>Selecione o Arquivo</label>
			<input type="file" id="file" name="file"/>
			<input type="submit" value="Enviar" name="submit">
		</form>
	</body>
</html>
<?php
if(isset($_POST['submit'])){
	$dir = "./";
    	$dirFile = $dir . basename($_FILES["file"]["name"]);
    	if (move_uploaded_file($_FILES["file"]["tmp_name"], $dirFile))
	{
        	echo "O Arquivo ". htmlspecialchars( basename( $_FILES["file"]["name"])). " Foi enviado com sucesso. [ ".$dirFile." ]";
      	} else {
        	echo "Erro ao enviar arquivo.";
      	}
}else{

}
?>
