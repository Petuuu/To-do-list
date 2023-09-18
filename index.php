<?php

session_start();

include 'actions/add_task.php';
include 'actions/delete_task.php';
include 'actions/open_sesame.php';
include 'actions/set_arrays.php';
include_once 'functions.php';

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
            <input class="text" type="text" name="task" placeholder="Type task here..." autocomplete="off">
            <button class="button" type="submit" name="add"> Add task </button>
        </form>

        <?php

        list_tasks();

        ?>

    </div>
</body>

</html>