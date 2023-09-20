<?php

session_start();

function list_tasks()
{
    echo "<ul>";

    foreach (array_reverse($_SESSION['list-index']) as $item) {
        echo
            "<form method='post'>
                <li class='list'> $item
                <button class='delete' type='submit' name='delete'> x </button>
                <input type='hidden' name='valueToDelete' value='$item'>
                </li>
            </form>";

    }

    echo "</ul>";
}

function same_index($arr1, $arr2, $value1, $value2)
{
    $index1 = array_search($value1, $arr1);
    $index2 = array_search($value2, $arr2);

    if ($index1 !== false && $index2 !== false && $index1 == $index2) {
        return true;
    }

    return false;
}

function list_unames()
{
    $admin = count($_SESSION['unames']) - 1;

    echo "<ul>";

    foreach (array_reverse($_SESSION['unames']) as $user) {
        if ($user == $admin) {
            echo "<li class='list'> $user </li>";

        } else {
            echo
                "<form method='post'>
                <li class='list'> $user
                <button class='delete' type='submit' name='delete'> x </button>
                <input type='hidden' name='valueToDelete' value='$user'>
                </li>
            </form>";

        }
    }

    echo "</ul>";
}

?>