<?php
//Lendo e manipulando pastas/diretórios com PHP 7
$name = "images";
if(!is_dir($name)){
	mkdir($name);
	echo "Diretório criado";

}else{
	rmdir($name);
	echo $name." já existe e foi removido";
}
?>