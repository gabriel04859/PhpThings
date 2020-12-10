<form enctype="multipart/form-data" method="POST">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$file = $_FILES['fileUpload'];
	
	if ($file["error"]) {
		throw new Exception("Error".$file["error"]);
		
	}

	$dirUpload = "Uploads";
	if (!is_dir($dirUpload)) {
		mkdir($dirUpload);
	}

	if (move_uploaded_file($file["tmp_name"], $dirUpload.DIRECTORY_SEPARATOR.$file["name"])) {
		echo "Upload com sucesso.";
	}else{
		throw new Exception("Não foi possível realizar Upload.");
		
	}

	
}	
?>