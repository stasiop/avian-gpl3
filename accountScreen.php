<?php
//if(!isset($_COOKIE["USER FOR DM"])) {
//setcookie("USER FOR DM", "A", time() + (86400 * 30), "/src/dm/");
//}
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<table width="10%" border="1" class="table">
    <tr>
        <td><a href="/anonchat.php">anonchat</a></td>
    </tr>
</table>
<!-- FIGURE OUT HOW TO ADD TABLE BLOCK FOR EACH SERVER THEY ARE IN --!>
<table width="10%" border="1" class="table">
    <tr>
        <td><a href="/src/dm/dm_generator.php">Private DM w/ stan</a></td>
    </tr>
</table>

