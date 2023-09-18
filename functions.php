<?php

function list_tasks()
{
    if (!empty($_SESSION['list'])) {
        echo "<ul>";

        foreach (array_reverse($_SESSION['list']) as $item) {
            echo
                "<form method=post>
                <li class=list> $item
                <button class=delete type=submit method=post name=delete> x </button>
                <input type=hidden name=valueToDelete value='$item'>
                </li>
            </form>";

        }

        echo "</ul>";
    }
}

function same_index($arr1, $arr2, $value1, $value2)
{
    if (!is_array($arr1) && !is_array($arr2)) {
        $arr1 = array();
        $arr2 = array();
    }

    $index1 = array_search($value1, $arr1);
    $index2 = array_search($value2, $arr2);

    if ($index1 !== false && $index2 !== false && $index1 == $index2) {
        return true;
    }

    return false;
}

function list_accounts()
{

}

?>