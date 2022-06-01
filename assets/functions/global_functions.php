<?php
    // *** Checking if the user is logged in
    function UserLoggedInStatusCheck() {
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            $root_index = "http://localhost/projects/PLANNING_TOOL_OOP/PLANNING_TOOL_OOP/user/login_user.php";
            //echo "<script>console.log('UserLoggedInStatusCheck Session is NOT set;');</script>";
            header("location: ".$root_index."");
            exit;
        }
    }
    
    // *** Global Variables
    function GlobalVariables() {
        global $currentUrl;
        global $currentDirectory;

        $currentUrl =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    }
?>