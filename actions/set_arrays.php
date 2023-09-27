<?php

if (!isset($_SESSION['list-i']) || !is_array($_SESSION['list-i'])) {
    $_SESSION['list-i'] = array();
}

if (!isset($_SESSION['list']) || !is_array($_SESSION['list'])) {
    $_SESSION['list'] = array(array());
}

if (!isset($_SESSION['unames']) || !is_array($_SESSION['unames'])) {
    $_SESSION['unames'] = array();
}

if (!isset($_SESSION['pwords']) || !is_array($_SESSION['pwords'])) {
    $_SESSION['pwords'] = array();
}

?>