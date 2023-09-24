<?php

include_once 'functions.php';

if (isset($_POST['add-index'])) {
    if (trim($_POST['task-index']) !== "") {
        $_SESSION['list-index'][] = $_POST['task-index'];

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['add'])) {
    if (trim($_POST['task']) !== "") {
        $_SESSION['index'][] = $_POST['task'];

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['delete'])) {

    if (($key = array_search($_POST['valueToDelete'], $_SESSION['list'][$_SESSION['index']])) !== false) {
        unset($_SESSION['list'][$_SESSION['index']][$key]);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['delete-user'])) {
    if (($key = array_search($_POST['valueToDelete'], $_SESSION['unames'])) !== false) {
        unset($_SESSION['unames'][$key]);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

if (isset($_POST['delete-index'])) {
    if (($key = array_search($_POST['valueToDelete'], $_SESSION['list-index'])) !== false) {
        unset($_SESSION['list-index'][$key]);

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

if (isset($_POST['back-index'])) {
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