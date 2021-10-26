<?php
session_unset();
session_destroy();
setcookie("login", "2", time() + (1000 * 60), "/");
header ("Location: /konecta-front/src/iniciosession");
?>
