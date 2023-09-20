<?php

include '../actions/buttons.php';
include_once '../functions.php';

?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title> PHP To-do list </title>

</head>

<body>

    <form method="post" class="upper-container-right">
        <button class="button" type="submit" name="settings">
            <i class="fa-solid fa-user"> </i>
        </button>
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