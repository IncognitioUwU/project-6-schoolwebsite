<?php
    define("SERVERNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASENAME", 'tac_site');
    function connect(): mysqli {
        $connect = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }
        return $connect;
    }
?>