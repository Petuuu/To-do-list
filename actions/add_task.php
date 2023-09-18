<?php

if (isset($_POST['add'])) {
    if (isset($_POST['task']) && trim($_POST['task']) !== "") {
        $_SESSION['list'][] = $_POST['task'];

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

?>