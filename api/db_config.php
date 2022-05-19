<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "damilola");
define("DBNAME", "beopari");


if (!isset($_SESSION["started"])) {
    session_start();
    $_SESSION["started"] = true;
}



$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

//check for errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit;
}
