<?php
$DMnum = $_POST["DMnum"];
if (file_exists($DMnum . ".txt")) {
	$cookie_name = "CURRENTDM";
	$cookie_value = $DMnum;
	setcookie($cookie_name, $cookie_value, time() + (10), "/"); // 86400 = 1 day
?>
	<iframe id="GFG" src = "/src/dm/<?php echo $DMnum; ?>.txt" width = "50%" height = "50%"style="border: 0px">
		Sorry your browser does not support inline frames. Use GNU IceCat.
    </iframe>
	<form method="POST" action="/src/dm/submitDM.php">
        <input name="message" placeholder="Isn't avian so pog?!" type="text">
        <button type="submit" value="submit">Send</button>
    </form>
<?php
} else { echo "Are you sure that you typed your id correctly? The id you typed: " . $DMnum; }
?>
