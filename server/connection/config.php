<?php
/**
 * Created by IntelliJ IDEA.
 * User: pakabah
 * Date: 26/10/2016
 * Time: 8:52 PM
 */

$hostname = "localhost";
$usrname = "username";
$password = "password";
$dbname = "dbname";

global $db;
try {
    $db = new PDO("mysql:host=$hostname;dbname=$dbname",$usrname,$password);
//echo "connected";
}catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}