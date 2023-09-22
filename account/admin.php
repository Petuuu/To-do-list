<?php

include '../actions/buttons.php';
include_once '../actions/functions.php';

?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title> Accounts' overview </title>

</head>

<body>

    <form method="post" class="upper-container-right">
        <button class="button" type="submit" name="settings-a">
            <i class="fa-solid fa-user-secret"> </i>
        </button>
    </form>

    <div>

        <h1> Accounts' overview </h1>

        <?php

        list_unames();

        ?>

    </div>
</body>

</html>