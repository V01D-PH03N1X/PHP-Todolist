<?php
/*
 *  Sebastian Schindler | Paul Rakutt
 *  Simple Web Todolist | Written in HTML, PHP, CSS And JavaScript
 *  Version 0.0.3 | Copyright DarkModz & Cookieleaks 2020-2022
 *  
 *  MySql Query File for the Simple Todolist
 *
*/


@include_once("../config.php");

if(empty($host)){
    consoleout("Please set SQL Host in config.php", "error");
}

if(empty($user)){
    consoleout("Please set SQL user in config.php", "error");
}

if(empty($password)){
    consoleout("Please set SQL password in config.php", "error");
}

if(empty($database)){
    consoleout("Please set SQL Database in config.php", "error");
}

if(empty($port)){
    $port = "3306";
    consoleout("Because the port was not set the default port 3306 is used!", "info");
}

@$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    echo ("<script>console.log(\"Connection failed: " .$conn->connect_error ."\")</script>");
} else
    echo ("<script>console.log(\"MySQL Connection Successful!\")</script>");

if(false){
    $sql = "CREATE TABLE IF NOT EXISTS `list` (
        `ID` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `list` varchar(255) NOT NULL
        );";
    mysqli_query($conn, $sql);
}
    
?>