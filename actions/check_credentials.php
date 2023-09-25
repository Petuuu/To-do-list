<?php

include 'set_arrays.php';
include_once 'functions.php';

if (isset($_POST['signing-up'])) {

    if (trim($_POST['uname-new']) !== "" && trim($_POST['pw-new']) !== "" && $_POST['confirm-pw'] !== "") {

        if (!in_array($_POST['uname-new'], $_SESSION['unames'])) {

            if ($_POST['pw-new'] === $_POST['confirm-pw']) {

                $_SESSION['unames'][] = $_POST['uname-new'];
                $_SESSION['pwords'][] = $_POST['pw-new'];

                header("Location: ../account/login.php");
                exit;

            } else {
                echo "<script type='text/javascript'>
            alert('Passwords don\\'t match');
            window.location.href = document.referrer;
            </script>";
            }

        } else {
            echo "<script type='text/javascript'>
        alert('Username already used');
        window.location.href = document.referrer;
        </script>";
        }

    } else {
        echo "<script type='text/javascript'>
        alert('Please fill out all fields');
        window.location.href = document.referrer;
        </script>";
    }
}

if (isset($_POST['loging-in'])) {

    if (trim($_POST['uname']) !== "" && trim($_POST['pw']) !== "") {

        if (same_index($_SESSION['unames'], $_SESSION['pwords'], $_POST['uname'], $_POST['pw']) == true) {

            if ($_POST['uname'] === $_SESSION['unames'][0]) {
                header("Location: ../account/admin.php");
                exit;
            }

            $_SESSION['index'] = array_search($_POST['uname'], $_SESSION['unames']);

            header("Location: ../account/logged_in.php");
            exit;

        } else {
            echo "<script type='text/javascript'>
        alert('Incorrect username or password');
        window.location.href = document.referrer;
        </script>";
        }

    } else {
        echo "<script type='text/javascript'>
        alert('Please fill all out fields');
        window.location.href = document.referrer;
        </script>";
    }
}

?>