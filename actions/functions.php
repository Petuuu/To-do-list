<?php

session_start();

function list_tasks()
{
    if (isset($_SESSION['list'][$_SESSION['index']]) && is_array($_SESSION['list'][$_SESSION['index']])) {
        echo "<ul>";

        foreach (array_reverse($_SESSION['list'][$_SESSION['index']]) as $item) {
            echo
                "<form method='post'>
                <li class='list'> $item
                <button class='delete' type='submit' name='delete'> x </button>
                <input type='hidden' name='valueToDelete' value='$item'>
                </li>
            </form>";

        }
    }

    echo "</ul>";
}

function list_tasks_index()
{
    echo "<ul>";

    foreach (array_reverse($_SESSION['list-index']) as $item) {
        echo
            "<form method='post'>
                <li class='list'> $item
                <button class='delete' type='submit' name='delete-index'> x </button>
                <input type='hidden' name='valueToDelete' value='$item'>
                </li>
            </form>";

    }

    echo "</ul>";
}

function list_unames()
{
    $admin = 1;

    echo "<ul>";

    foreach (array_reverse($_SESSION['unames']) as $user) {
        if ($user == $admin) {
            echo
                "<form method='post'>
                <li class='list'> $user
                <button class='button' type='submit' name='edit'> Edit </button>
                <input type='hidden' name='valueToDelete' value='$user'>
                </li>
            </form>";

        } else {
            echo
                "<form method='post'>
                <li class='list'> $user
                <button class='delete' type='submit' name='delete-user'> x </button>
                <button class='button' type='submit' name='edit'> Edit </button>
                <input type='hidden' name='valueToDelete' value='$user'>
                </li>
            </form>";

        }
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

?>