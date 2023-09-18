<?php

include_once '../functions.php';
include '../actions/set_arrays.php';

if (isset($_POST['signing-up'])) {

    if (!in_array($_POST['uname-new'], $_SESSION['unames'])) {

        if ($_POST['pw-new'] == $_POST['confirm-pw']) {

            $_SESSION['unames'][] = $_POST['uname-new'];
            $_SESSION['pwords'][] = $_POST['pw-new'];

            header("Location: ../account/login.php");
            exit;

        } else {
            echo "<script type='text/javascript'>
            alert('Passwords don't match');
            window.location.href = document.referrer;
            </script>";

            exit;
        }

    } else {
        echo "<script type='text/javascript'>
        alert('Username not found');
        window.location.href = document.referrer;
        </script>";

        exit;
    }
}

if (isset($_POST['loging-in'])) {

    if (same_index($_SESSION['unames'], $_SESSION['pwords'], $_POST['uname'], $_POST['pw']) == true) {

        if ($_POST['uname'] === $_SESSION['unames'][0]) {
            header("Location: ../account/admin.php");
            exit;
        }

        header("Location: ../account/logged_in.php");
        exit;

    } else {
        echo "<script type='text/javascript'>
        alert('Incorrect username or password');
        window.location.href = document.referrer;
        </script>";

        exit;
    }
}

?>