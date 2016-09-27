<?php

function getConnection() {
    $host           = "localhost";
    $user           = "root";
    $password       = "ciloo";
    $db             = "ciloodb";

// Create connection
    $mysqli = new mysqli($host, $user, $password, $db);

// Check connection
    if (false === $mysqli->connect_errno) {
       echo "failed to connect to MySQL : (".$mysqli->connect_errno.")".$mysqli->connect_error;
        die();
    }
    return $mysqli;
}

function execSql ($mysqli, $sql) {
    if (!$result = $mysqli->query($sql)) {
        echo "failed to run query:(".$mysqli->errno .")". $mysqli->error;
        die();
    }
    return $result;
}
