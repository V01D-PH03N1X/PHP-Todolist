<?php
include_once("includes/defines.php");
/*
 *  Sebastian Schindler | Paul Rakutt
 *  Simple Web Todolist | Written in HTML, PHP, CSS And JavaScript
 *  Version 0.0.3 | Copyright DarkModz & Cookieleaks 2020-2022
 *  
 *  Configuration File for the Simple Todolist
 *
*/

// SQL CONFIGURATIONS
// Example:
//
// $host = "localhost";              Domain or IP address of the database server 
// $port = 3306;                       Leave empty for default Port (3306)
// $user = "db_todo";                Username of Database Server       
// $password = "S3CR3T-P4SSW0RD";    Passwort for Database Server
// $database = "db_todo";            Database which should be used

$host = "localhost";
$port = "3306";
$user = "todo";
$password = "lokalius";
$database = "todo";


// Enable or Disable darkmode
// Example: 
//
// $darkmode = on; enables darkmode and the site will appear in Darkmode
// $darkmode = off; disables darkmode and the site will appear in Lightmode

$darkmode = on;


// Here you can set the Pagetitle
// Example:
//
// $pagetitle = "Your Pagetitle here";

$pagetitle = "Change in Config.php";


?>