<?php

    require("API/api.php");
    session_start();

    // Time in minutes
    $expireAfter = 30;



    attempt($_SERVER['REMOTE_ADDR'], $_POST["username"], $_POST["password"]);

    if (login($_POST["username"], $_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["logintime"] = time();
        header("Location: home.php");
    }

    else {

        header("Location: incorrectlogin.php");
    }

?>