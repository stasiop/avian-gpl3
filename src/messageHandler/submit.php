<?php

	function saveFile(){
	$IDstr = file_get_contents("id.txt");
	$ID = (int) $IDstr;
	$name = "Anon";
	$ID++;
	$ID4 = sprintf("%04s", $ID);
	$data_file = fopen("message.txt", "a+");
	$IDsave = fopen("id.txt", "w+");
	$message = $_POST["message"];
	$text_to_write = $name . ": " . $message . "\n";
	fwrite($IDsave, $ID);
	fwrite($data_file, $text_to_write);
	fclose($data_file);
	header('Location: /anonchat.html');
	fwrite($IDsave, $ID);
	}
	saveFile();
?>
