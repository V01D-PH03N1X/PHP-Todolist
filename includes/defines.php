<?php
/*
 *  Sebastian Schindler | Paul Rakutt
 *  Simple Web Todolist | Written in HTML, PHP, CSS And JavaScript
 *  Version 0.0.3 | Copyright DarkModz & Cookieleaks 2020-2022
 *  
 *  Defines File for the Simple Todolist
 *
*/


// * * * F U N C T I O N S * * * 
function consoleout($message, $color) {

     if(empty($color)){
         $color = "black" ;
     }

    switch ($color) 
    {
        case "success":  
             $color = "#82C714"; 
             break;
        case "info":     
             $color = "#0093FC";  
             break;
        case "error":   
             $color = "#BF0426";     
             break;
        case "warn":  
             $color = "#F56A00";   
             break;
        default: 
             $color = $color;
    }

    echo '<script>console.log("%c" + "'.$message.'", "color:" + "'.$color.'");</script>';
}

// * * * D E F I N E S * * * 
define("on", true);
define("off", false);

?>