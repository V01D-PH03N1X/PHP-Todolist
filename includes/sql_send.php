<?php
ob_start(); // needs to be added here
?>
<?php
/*
 *  Sebastian Schindler | Paul Rakutt
 *  Simple Web Todolist | Written in HTML, PHP, CSS And JavaScript
 *  Version 0.0.3 | Copyright DarkModz & Cookieleaks 2020-2022
 *  
 *  MySql SendData File for the Simple Todolist
 *
*/


include_once("defines.php");
include_once("sql_query.php");

if (isset($_GET['check'])){
	$id = $_GET['check'];

	$sql= "DELETE FROM list WHERE id=".$id;
    $erg = mysqli_query($conn, $sql);
    if($erg == "1"){
        $out = "Listenpunkt erfolgreich erledigt!";
    }
    if($erg == "0"){
        $out = "Listenpunkt wurde NICHT erledigt!";
    }
    header("Location: ../index.php?out=".$out);
    exit();
}
if(isset($_GET['eingabe'])){
    if(empty($_GET['eingabe'])){
        $erg = "Error! Eingabe ist Leer!";
        consoleout($erg, "error");
        header("Location: ../index.php?out=".$erg);
	exit();
    }
    if(!empty($_GET['eingabe'])){
       //SQL HIER ADDEN!
        $sql= "INSERT INTO `list`(`list`) VALUES (\"".$_GET['eingabe']."\")";
        $erg = mysqli_query($conn, $sql);
        if($erg == "1"){
            $out = "Listenpunkt wurde erfolgreich hinzugefügt!";
        }
        if($erg == "0"){
            $out = "Listenpunkt wurde NICHT hinzugefügt!";
        }
        header("Location: ../index.php?out=".$out);
	exit();
    }
}
?>