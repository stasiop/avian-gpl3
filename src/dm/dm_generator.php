<?php
if(!isset($_COOKIE["user"])) {
	echo "YOU FOOL, YOUR COOKIE ISN'T SET";
} else {
	if (file_exists($_COOKIE["user"] . ".txt")) {
 		echo "The file exists";
	} else {
		echo "doesn't";
		$myfile = fopen($_COOKIE["user"] . ".txt", "a+") or die("\nUnable to open file!");
		$txt = "DM SHIT\n";
		fwrite($myfile, $txt);
		$txt = "DM SHIT\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}
}
header ('Location: ' . $_COOKIE["user"] . ".txt"); 
?>
