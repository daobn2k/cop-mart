<?php
/**
 * 
 */
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "cop_mart";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    //db connect
?>