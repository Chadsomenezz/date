<?php
session_start();

require_once "new-connection.php";

if($_SESSION["email"] !== ""){

    echo "You enter the " . $_SESSION["email"] . " email Address.";
    echo "<h1>VALID EMAIL LIST </h1>";

    $result = $db->query("SELECT email,date FROM emails ORDER BY date DESC");

    echo "<ul>";
    while($row = $result->fetch_object()){

        $phpdate = strtotime( $row->date );
        $mysqldate = date( 'Y-m-d h:i:s a', $phpdate );

        echo "<li>{$row->email} : $mysqldate</li>";
    }
    echo "</ul>";
    $_SESSION["email"] = "";
}else{
    header("location: index.php");
}


die();