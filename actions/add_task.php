<?php

if (isset($_POST['add'])) {
    if (trim($_POST['task'] != "")) {
        $_SESSION['list'][] = $_POST['task'];

        header("Location: index.php");
        exit;

    }
}

?>