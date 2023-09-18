<?php

if (isset($_POST['delete'])) {

    if (($key = array_search($_POST['valueToDelete'], $_SESSION['list'])) !== false) {
        unset($_SESSION['list'][$key]);

        header("Location: index.php");
        exit;
    }
}

?>