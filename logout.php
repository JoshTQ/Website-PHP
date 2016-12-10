<?php

    require("API/api.php");
    session_start();

    session_destroy();

    header("Location: index.php");

?>