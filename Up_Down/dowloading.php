<?php
	$link = "https://www.udemy.com/staticx/udemy/images/v6/logo-coral-light.svg";
	$content = file_get_contents($link);
	
	$parse = parse_url($link);
	$baseName = basename($parse["path"]);
	$file = fopen($baseName,"w+");
	fwrite($file, $content);
	fclose($file);

?>

<img src="<?=$baseName?>">