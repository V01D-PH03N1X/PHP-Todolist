<?php
/*
 *  Sebastian Schindler | Paul Rakutt
 *  Simple Web Todolist | Written in HTML, PHP, CSS And JavaScript
 *  Version 0.0.3 | Copyright DarkModz & Cookieleaks 2020-2022
 *  
 *  Index File for the Simple Todolist
 *
*/

//  * * * I N C L U D E S * * *
include_once("config.php");
include_once("includes/sql_query.php");
// * * * Load Configurations * * *
if(isset($_GET['out'])){
    $out = $_GET['out'];
    if($out == "1")
        consoleout("Eintrag wurde erfolgreich erledigt!", "info");
    if($out == "0"){
        consoleout("Eintrag wurde nicht erfolgreich erledigt!","error");
    }else{
        consoleout($out, "warn");
    }

}
if(empty($pagetitle)){
    $pagetitle = "Please set the Pagetitle!";   //Error for not set Pagetitle
    consoleout("Pagetitle was not set. This could cause errors!", "error");
}
            $sql = "SELECT * FROM `list` WHERE 1";
            $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width:device-width, initial-scale:1.0;">                 <!-- Ansicht der Website auf Gerät anpassen -->
        <meta name="author" content="Sebastian Schindler, Paul Rakutt">                         <!-- Authoren der Website -->
        <meta name="copyright" content="DarkModz & Cookieleaks 2020-2022">                      <!-- Copyright der Website -->
        <meta name="description" content="Free Simple ToDo-List Webapplication">                <!-- Beschreibung der Website -->
        <meta name="keywords" content="todo, list, free, web, application, webapplication">     <!-- KeyWords/Schlagwörter der Website -->
        <meta charset="UTF-8">                                                                  <!-- Zeichensatz der Website für richtige Zeichendarstellung und übertragung -->
        <title><?php Echo $pagetitle;?></title>                                                 <!-- PHP Script zum auslesen des Websiten Titels aus der Config -->
        <link rel="shortcut icon" href="./favicon.ico"/>
        <link rel="stylesheet" href="res/style.css?id=no-cache"/>                               <!-- Einbindung der externen Resourcen (CSS[Stylesheet], Websiten Icon)-->
    </head>

    <body class="<?php if($darkmode==true){Echo "dark";}else Echo "light"; ?>"> 	            <!-- PHP Script für Webdesign [Light/Darkmode] mit CSS klasse umgesetzt -->
    <h1 class="small center"><?php Echo $pagetitle; ?></h1>                                     
    <form action="includes/sql_send.php" method="get">
    <table class="small">
            <!--<th><td><label><input type="checkbox" name="SQL ID"> SQL list </label></td></th> -->
        <?php 
            while($row = mysqli_fetch_array($result)){
                    echo '<tr class="checkform"><td><label><button type="submit" name="check" value="'.$row['ID'].'">Check!</button> '. $row['list'] . '</label></td></tr>';
            }

        ?>      <!-- PHP Script für MySQL abfrage und Darstellung der ToDo Listeneinträge -->
    </table>
    </form>
    <form action="includes/sql_send.php" method="get">
        <table class="small">
            <tr><td><button type="submit">Hinzuf&uuml;gen!</button></td><td><input class="textbox small" type="text" name="eingabe"size="70"></td></tr>
        </table>
    </form>
    <p class="small">&copy; Sebastian Schindler, Paul Rakutt - 2020 - 2021</p>
    </body>
</html>