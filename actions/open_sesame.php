<?php

if (isset($_POST['login'])) {
    header("Location: account/login.php");
    exit;
}

if (isset($_POST['sign-up'])) {
    header("Location: account/sign_up.php");
    exit;
}

?>