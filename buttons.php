<?php

if (isset($_POST['add'])) {
    if (isset($_POST['task']) && trim($_POST['task']) !== "") {
        $_SESSION['list'][] = $_POST['task'];

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['delete-item'])) {

    if (($key_item = array_search($_POST['valueToDelete'], $_SESSION['list'])) !== false) {
        unset($_SESSION['list'][$key_item]);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['login'])) {
    header("Location: account/login.php");
    exit;
}

if (isset($_POST['sign-up'])) {
    header("Location: account/sign_up.php");
    exit;
}

if (isset($_POST['account'])) {
    header("Location: account.php");
}

if (isset($_POST['back'])) {
    header("Location: ../index.php");
    exit;
}

?>