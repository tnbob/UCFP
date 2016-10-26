<?php
/**
 * Created by IntelliJ IDEA.
 * User: pakabah
 * Date: 26/10/2016
 * Time: 8:52 PM
 */

class Login
{
    function checkUserAccount($username,$password,$db)
    {

        $data = array();
        $Info = array();

        $password = hash("sha256", $password);

        $query = "SELECT * FROM tbl_staff WHERE username=? AND password=?";
        $q = $db->prepare($query);
        $q->execute(array($username, $password));
        $res = $q->fetch(PDO::FETCH_ASSOC);

        if (!empty($res['username'])) {

            session_start();
            $_SESSION['username'] = $res['username'];
            $_SESSION['profile'] = $res['admin'];
            $_SESSION['group_id'] = $res['group_id'];
            $_SESSION['name'] = $res['name'];


            $data['profile']  = $res['admin'];
            $data['name']  = $res['name'];

            $Info[] = $data;

            return json_encode($Info);
        } else {
            return "0";
        }
    }
}