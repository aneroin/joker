<?php
session_set_cookie_params(0, '/', '.taxijoker.com');
session_start();
if (isset($_SESSION['USER']))
unset($_SESSION['USER']);
session_commit():
header("Location: " . "http://taxijoker.com/");
?>
