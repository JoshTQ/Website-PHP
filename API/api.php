<?php

    function get_mysql() {
    $mysql = new mysqli("localhost", "Example", "Example", "Example");

    if ($mysql->connect_error) {
        die($mysql->connect_error);
    }

    return $mysql;
}

    function login($username, $password) {
         $password = hash("sha256", $password);

        return get_mysql()->query("select count(*) from Edward where username = '$username' and password = '$password'")->fetch_assoc()["count(*)"] > 0;
    }

    function register($username, $password) {
        $password = hash("sha256", $password);

        get_mysql()->query("insert into Edward (username, password) values ('$username', '$password')");
    }

    function attempt($ip, $user, $password, $ip) {

        get_mysql()->query("insert into LoginAttempts (ip, user, password) values ('$ip', '$user', '$password')");
}

?>