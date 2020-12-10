<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
	$command = escapeshellcmd($_POST["command"]);
	var_dump($command);


}

?>

<form method="post">
	<input type="text" name="command">
	<button type="submit">Enviar</button>  

 </form>