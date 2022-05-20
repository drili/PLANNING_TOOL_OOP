<?php
    // *** Global Variables
    function GlobalVariables() {
        global $currentUrl;
        global $currentDirectory;
        
        $currentUrl =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $currentDirectory = ".";
    }
?>