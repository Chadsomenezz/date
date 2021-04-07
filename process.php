<?php

session_start();
$_SESSION["error"] = [];
date_default_timezone_set ( 'Asia/Singapore' );

require_once "new-connection.php";

if (isset($_POST["email"]) && FILTER_VAR($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $_SESSION["email"] = $_POST["email"];
    $email = $_POST["email"];
    $datenow = date("Y-m-d h:i:s A");
    $result = $db->query("INSERT INTO emails(email,date) VALUES ('$email',now())  ");
    header("location: success.php");


}else{
    $_SESSION["error"][] = "<span style='color: red'>Please put a valid email address</span>";
    header("location: index.php");
}

die();