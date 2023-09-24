<?php

if (!isset($_SESSION['list-index']) || !is_array($_SESSION['list-index'])) {
    $_SESSION['list-index'] = array();
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