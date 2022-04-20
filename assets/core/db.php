<?php


session_start();
/**
 * Voor de MAC gebruikers;
 */
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "root";
// $dbname = "vrijwilligershuis";

/**
 * Voor de Windows gebruikers;
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "vrijwilligershuis";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}
