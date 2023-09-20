<?php

include '../actions/buttons.php';

?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title> PHP To-do list </title>

</head>

<body>
    <form class="upper-container-left" method="post">
        <button class="back" type="submit" name="back-index">
            <i class="fa-solid fa-rotate-left"> back </i>
        </button>
    </form>

    <div>
        <h1> Sign up </h1>

        <form method="post" action="../actions/check_credentials.php">
            <ul>
                <p>
                    Username:
                    <input class="text" type="textbox" name="uname-new" autocomplete="off">
                </p>

                <p>
                    Password:
                    <input class="text" type="password" name="pw-new" autocomplete="off">
                </p>

                <p>
                    Comfirm password:
                    <input class="text" type="password" name="confirm-pw" autocomplete="off">
                </p>

                <p>
                    <button class="button" type="submit" name="signing-up"> Sign up </button>
                </p>
            </ul>
        </form>
    </div>
</body>

</html>