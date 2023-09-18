<?php

if (isset($_POST['delete-item'])) {

    if (($key_item = array_search($_POST['valueToDelete'], $_SESSION['list'])) !== false) {
        unset($_SESSION['list'][$key_item]);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

?>