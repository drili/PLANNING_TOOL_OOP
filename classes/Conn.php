<?php
    class Conn {
        private $_host = "mysql70.unoeuro.com";
        private $_username = "hybridtech_dk";
        private $_password = "BkrmDxahgA65";
        public $connection;
 
        public function __construct() {
            
            // *** Determine the current environment
            if ($_SERVER['SERVER_NAME'] == "localhost" || $_SERVER['SERVER_NAME'] == "planningtool-staging.hybridtech.dk"){
                $_database = "hybridtech_dk_db_planning_tool_staging";
            } else if ($_SERVER['SERVER_NAME'] == "planningtool.hybridtech.dk"){
                $_database = "hybridtech_dk_db_timera";
            }
    
            if (!isset($this->connection)) {
                $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $_database);

                if (!$this->connection) {
                    //echo "<script>console.log('::: (Conn.php) - Error connecting to database.');</script>";
                    exit;
                } else {
                    //echo "<script>console.log('::: (Conn.php) - Database connection successful.');</script>";
                }
            }

            return $this->connection;
        }
    }
?>