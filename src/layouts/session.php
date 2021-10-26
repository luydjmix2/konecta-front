<?php
// echo $_COOKIE["login"];
if (isset($_COOKIE["login"]) && $_COOKIE["login"] != '2') {
    session_start();
} else {
    header("Location: /konecta-front/src/iniciosession/");
    exit;
}
