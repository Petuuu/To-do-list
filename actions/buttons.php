<?php

include_once 'functions.php';

if (isset($_POST['add-i'])) {
    if (trim($_POST['task-i']) !== "") {
        $_SESSION['list-i'][] = $_POST['task-i'];

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['add'])) {
    if (trim($_POST['task']) !== "") {
        $_SESSION['list'][$_SESSION['index']][] = $_POST['task'];

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['delete'])) {
    $key = array_search($_POST['value'], $_SESSION['list'][$_SESSION['index']]);
    unset($_SESSION['list'][$_SESSION['index']][$key]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['delete-user'])) {
    $key = array_search($_POST['value'], $_SESSION['unames']);
    unset($_SESSION['unames'][$key]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['delete-i'])) {
    $key = array_search($_POST['value-i'], $_SESSION['list-i']);
    unset($_SESSION['list-i'][$key]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['login'])) {
    header("Location: account/login.php");
    exit;
}

if (isset($_POST['sign-up'])) {
    header("Location: account/sign_up.php");
    exit;
}

if (isset($_POST['back-i'])) {
    header("Location: ../index.php");
    exit;
}

if (isset($_POST['back-account'])) {
    header("Location: logged_in.php");
    exit;
}

if (isset($_POST['back-admin'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['settings-a'])) {
    header("Location: settings_admin.php");
    exit;
}

if (isset($_POST['settings'])) {
    header("Location: settings.php");
    exit;
}

if (isset($_POST['log-out'])) {
    header("Location: ../index.php");
    exit;
}

if (isset($_POST['delete-account'])) {
    unset($_SESSION['unames'][$_SESSION['index']]);
    unset($_SESSION['pwords'][$_SESSION['index']]);
    unset($_SESSION['list'][$_SESSION['index']]);

    header("Location: ../index.php");
    exit;
}

?>