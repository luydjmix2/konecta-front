<?php
session_start();
setcookie("login", "1", time() + (1000 * 60), "/");
// echo $_GET['active'];
if (isset($_GET['active']) && $_GET['active'] == 1) {
    if (isset($_GET['active']) && $_GET['active'] != '') {
        setcookie("mailU", $_GET['active'], time() + (1000 * 60), "/");
    }
    header("Location: /konecta-front/src/views/inicio");
} else {
    header("Location: /konecta-front/src/iniciosession/");
}
