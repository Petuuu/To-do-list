<?php

include '../actions/buttons.php';

?>

<!DOCTYPE html>
<html>

<Head>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title> PHP To-do list </title>

</Head>

<body>

    <form class="upper-container-left" method="post">
        <button class="back" type="submit" name="back-admin">
            <i class="fa-solid fa-rotate-left"> back </i>
        </button>
    </form>

    <div>
        <h1> Account </h1>

        <form method="post">
            <p>
                <button class="button" type="submit" name="log-out" id="big"> Log out </button>
            </p>
        </form>

        <i class="fa-solid fa-user-secret" id="icon-admin"> </i>
    </div>
</body>

</html>