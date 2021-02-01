<?php
$DMnum = $_POST["DMnum"];
if (file_exists($DMnum . ".txt")) {
	$cookie_name = "CURRENTDM";
	$cookie_value = $DMnum;
	setcookie($cookie_name, $cookie_value, time() + (10), "/"); // 86400 = 1 day
?>
	<iframe id="GFG" src = "/src/dm/<?php echo $DMnum; ?>.txt" width = "100%" height = "100%"style="border: 0px">
		Sorry your browser does not support inline frames. Use GNU IceCat.
    </iframe>
<?php
} else { echo "Are you sure that you typed your id correctly? The id you typed: " . $DMnum; }
?>
