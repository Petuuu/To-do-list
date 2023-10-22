<?php

include 'actions/buttons.php';
include 'actions/set_arrays.php';
include_once 'actions/functions.php';

?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">
    <title> PHP To-do list </title>

</head>

<body>

    <form method="post" class="upper-container-right">
        <button class="account" type="submit" name="login"> Login </button>
        <button class="account" type="submit" name="sign-up"> Sign up </button>
    </form>

    <div>

        <h1> To-do list </h1>

        <form method="post">
            <input class="text" type="text" name="task-i" placeholder="Type task here..." autocomplete="off">
            <button class="button" type="submit" name="add-i"> Add task </button>
        </form>

        <?php

        list_tasks_i();

        if (isset($_POST['edit-i'])) {
            echo "<form method='post'>
                    <input class='text' type='text' name='newValue' autocomplete='off'>
                    <button class='button' type='submit' name='edited-i'> Change </button>
                </form>";

            $key = array_search($_POST['value-i'], $_SESSION['list-i']);
            echo $key;
            echo $_SESSION['list-i'][$key];
        }

        ?>

    </div>
</body>

</html>