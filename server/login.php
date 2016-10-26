<?php
/**
 * Created by IntelliJ IDEA.
 * User: pakabah
 * Date: 26/10/2016
 * Time: 8:51 PM
 */
include "connection/config.php";
include "core/login.php";

global $db;

$postdata = file_get_contents("php://input");
$dataObj = json_decode($postdata,false);

if($dataObj->app == "login")
{
    $username = $dataObj->username;
    $password = $dataObj->password;
    $app = new Login();
    echo $app->checkUserAccount($username,$password,$db);
}